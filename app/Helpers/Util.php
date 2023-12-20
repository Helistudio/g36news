<?php

use Carbon\Carbon;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;

if (!function_exists('getJson')) {
    function getJson($url, $header = [], $isWriteLog = false)
    {
        // Prepare new cURL resource
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);

        // Set HTTP Header for POST request
        if (!$header) {
            $header = ['Content-Type: application/json'];
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        // Submit the POST request
        $result_json = curl_exec($ch);

        // Process the response
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $body = substr($result_json, $header_size);
        $result = [
            'httpcode' => $httpcode,
            'body' => $body
        ];

        if ($isWriteLog) {
            Log::channel('log_api')->info('', ['GET_JSON_URL' => $url, 'GET_JSON_RESULT' => json_encode($result)]);
        }
        curl_close($ch);

        return $result;
    }
}

if (!function_exists('postJson')) {
    function postJson($url, $data, $header = [], $isWriteLog = false)
    {
        //Encode the array into JSON.
        $jsonDataEncoded = json_encode($data);

        // Prepare new cURL resource
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);

        // Set HTTP Header for POST request
        if (!$header) {
            $header = ['Content-Type: application/json'];
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        // Submit the POST request
        $result_json = curl_exec($ch);

        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
        }

        if (isset($error_msg)) {
//            dd($error_msg);
        }

        // Process the response
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $body = substr($result_json, $header_size);
        $result = [
            'httpcode' => $httpcode,
            'body' => $body
        ];

        if ($isWriteLog) {
            Log::channel('log_api')->info('', ['POST_JSON_URL' => $url, 'DATA' => $jsonDataEncoded, 'POST_JSON_RESULT' => json_encode($result)]);
        }
        curl_close($ch);

        return $result;
    }
}

if (!function_exists('gEncrypt')) {
    function gEncrypt($input, $key_seed)
    {
        $input = trim($input);
        $block = phpseclib_mcrypt_get_block_size('tripledes', 'ecb');
        $len = strlen($input);
        $padding = $block - ($len % $block);
        $input .= str_repeat(chr($padding), $padding);
        // generate a 24 byte key from the md5 of the seed
        $key = substr(md5($key_seed), 0, 24);
        $iv_size = phpseclib_mcrypt_get_iv_size(MCRYPT_TRIPLEDES, MCRYPT_MODE_ECB);
        $iv = phpseclib_mcrypt_create_iv($iv_size, MCRYPT_RAND);
        // encrypt
        $encrypted_data = phpseclib_mcrypt_encrypt(MCRYPT_TRIPLEDES, $key, $input, MCRYPT_MODE_ECB, $iv);
        // clean up output and return base64 encoded
        return base64_encode($encrypted_data);
    }
}

if (!function_exists('gDecrypt')) {
    function gDecrypt($input, $key_seed)
    {
        $input = base64_decode($input);
        $key = substr(md5($key_seed), 0, 24);
        $text = phpseclib_mcrypt_decrypt(MCRYPT_TRIPLEDES, $key, $input, MCRYPT_MODE_ECB, '12345678');
        $block = phpseclib_mcrypt_get_block_size('tripledes', 'ecb');
        $packing = ord($text{strlen($text) - 1});
        if ($packing and ($packing < $block)) {
            for ($P = strlen($text) - 1; $P >= strlen($text) - $packing; $P--) {
                if (ord($text{$P}) != $packing) {
                    $packing = 0;
                }
            }
        }
        $text = substr($text, 0, strlen($text) - $packing);
        return $text;
    }
}

if (!function_exists('miliseconds')) {
    function miliseconds()
    {
        $microtime = strval(intval((microtime(true) * 1000)));
        return $microtime;
    }
}

if (!function_exists('startsWith')) {
    function startsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }
}

if (!function_exists('generateRandomString')) {
    function generateRandomString($n = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
}

if (!function_exists('executeAsyncShellCommand')) {
    function executeAsyncShellCommand($comando = null)
    {
        if (!$comando) {
            throw new Exception("No command given");
        }
        // If windows, else
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            shell_exec($comando . " > NUL");
        } else {
            shell_exec($comando . " >/dev/null 2>&1 &");
        }
    }
}

if (!function_exists('sendMessageTelegram')) {
    function sendMessageTelegram($url, $id, $message, $buttons = null)
    {

        $data = array(
            'text' => $message,
            'chat_id' => $id
        );

        if ($buttons != null) {
            $data['reply_markup'] = [
                'keyboard' => $buttons,
                'resize_keyboard' => true,
                'one_time_keyboard' => false,
                'parse_mode' => 'HTML',
                'selective' => true
            ];
        }

        $data_string = json_encode($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
        );

        $result = curl_exec($ch);
        curl_close($ch);
    }
}

if (!function_exists('postJsonV2')) {
    function postJsonV2($url, $data, $header, $isWriteLog = false)
    {
        //Encode the array into JSON.
        $jsonDataEncoded = json_encode($data);

        // Prepare new cURL resource
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);

        // Set HTTP Header for POST request
        if (!$header) {
            $header = ['Content-Type: application/json'];
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        // Submit the POST request
        $result_json = curl_exec($ch);
//        dump($result_json);
        if ($isWriteLog) {
            Log::channel('log_api')->info($jsonDataEncoded, ['POST_JSON_URL' => $url, 'POST_JSON_RESULT' => $result_json]);
        }

        // Close cURL session handle
        curl_close($ch);
        $result = json_decode($result_json, true);
        return $result;
    }
}

if (!function_exists('getEncryptKeyFromToken')) {
    function getRedisKeyFromToken($token, $isBattle = false)
    {
        $encrypt_key = '';
        try {
            $origin = Crypt::decrypt($token);
            if ($origin) {
                $origin_arr = explode('____', $origin);
                if (isset($origin_arr[0]) && isset($origin_arr[1])) {
                    $email = $origin_arr[0];
                    if ($isBattle) {
                        $encrypt_key = Redis::connection()->client()->get($email . '_battle_key');
                    } else {
                        $encrypt_key = Redis::connection()->client()->get($email . '_data_encrypt_key');
                    }
                }
            }
        } catch (DecryptException $e) {
            $encrypt_key = '';
        }

        return $encrypt_key;
    }
}

if (!function_exists('getUserExIdFromToken')) {
    function getUserExIdFromToken($token)
    {
        $userExId = '';
        try {
            $origin = Crypt::decrypt($token);
            if ($origin) {
                $origin_arr = explode('____', $origin);
                if (isset($origin_arr[0]) && isset($origin_arr[1])) {
                    $email = $origin_arr[0];
                    $userExId = Redis::connection()->client()->get($email . '_id');
                    Redis::connection()->client()->expire($email, 43200);
                }
            }
        } catch (DecryptException $e) {
            $userExId = '';
        }

        return $userExId;
    }
}

if (!function_exists('getUserInfoFromToken')) {
    function getUserInfoFromToken($token)
    {
        $userInfo = '';
        try {
            $origin = Crypt::decrypt($token);
            if ($origin) {
                $origin_arr = explode('____', $origin);
                if (isset($origin_arr[0]) && isset($origin_arr[1])) {
                    $email = $origin_arr[0];
                    $userInfo = Redis::connection()->client()->get($email . '_user_info');
                }
            }
        } catch (DecryptException $e) {
            $userInfo = '';
        }

        return $userInfo;
    }
}

if (!function_exists('genUpdateBattleKey')) {
    function genUpdateBattleKey($token)
    {
        $str_response = '';
        try {
            $origin = Crypt::decrypt($token);
            if ($origin) {
                $origin_arr = explode('____', $origin);
                if (isset($origin_arr[0]) && isset($origin_arr[1])) {
                    $email = $origin_arr[0];
                    $str_response = md5(generateRandomString(20) . '_' . time());
                    $str1 = substr($str_response, 0, 10);
                    $str2 = substr($str_response, -10);
                    $str3 = substr($str_response, 10, 10);
                    $encrypt_key = $str2 . '_' . $str1 . '_' . $str3;
                    Redis::connection()->client()->set($email . '_battle_key', $encrypt_key);
//                    Redis::connection()->client()->expire($email . "_battle_key", 120);
                }
            }
        } catch (DecryptException $e) {
            $str_response = '';
        }

        return $str_response;
    }
}

if (!function_exists('delBattleKey')) {
    function delBattleKey($token)
    {
        $encrypt_key = '';
        try {
            $origin = Crypt::decrypt($token);
            if ($origin) {
                $origin_arr = explode('____', $origin);
                if (isset($origin_arr[0]) && isset($origin_arr[1])) {
                    $email = $origin_arr[0];
                    Redis::connection()->client()->del($email . '_battle_key');
                }
            }
        } catch (DecryptException $e) {
            $encrypt_key = '';
        }

        return $encrypt_key;
    }
}

if (!function_exists('checkValidateLineUp')) {
    function checkValidateLineUp($lineup)
    {
        $isValid = false;
        if (count($lineup) <= 5) {
            if (count(array_unique($lineup)) == count($lineup)) {
                $isValid = true;
            }
        }
        return $isValid;
    }
}

if (!function_exists('nemoWalletSign')) {
    function nemoWalletSign($message, $privateKey): string {
        if($privateKey == null) {
            throw new Exception('privateKey == null');
        }
        $rawSigned = sodium_crypto_sign(hash("sha256", $message, 1), $privateKey);
        return pack("C*", ...array_slice(unpack("C*", $rawSigned), 0, SODIUM_CRYPTO_SIGN_BYTES));
    }
}

if (!function_exists('nemoWalletVerify')) {
    function nemoWalletVerify($message, $signature, $publicKey): bool {
        if($publicKey == null){
            throw new Exception('publicKey == null');
        }
        $rawSigned = pack("C*", ...unpack("C*", $signature), ...unpack("C*", hash("sha256", $message, 1)));
        return sodium_crypto_sign_open($rawSigned, $publicKey) !== false;
    }
}
if (!function_exists('sendSocketMessage')) {
    function sendSocketMessage($service, $body)
    {
        $receiveBufferSize = 2048;

        $sHandle = fsockopen(config('constants.HOST'), config('constants.PORT'), $errno, $errstr, config('constants.TIMEOUT'));
        if (!$sHandle) {
            return $errstr;
        } else {
            /** Write to socket * */
            fwrite($sHandle, "K2"); // Header name "K2TP"
            //fwrite($sHandle, "" . chr(0) . chr(0)); // Header version
            $len = strlen($body);
            //fwrite($sHandle, "" . chr(($service >> 8) & 0xFF) . chr($service & 0xFF)); // Header service
            fwrite($sHandle, "" . chr(($service >> 24) & 0xFF) . chr(($service >> 16) & 0xFF) . chr(($service >> 8) & 0xFF) . chr(($service) & 0xFF)); // Header service
            fwrite($sHandle, "" . chr(($len >> 24) & 0xFF) . chr(($len >> 16) & 0xFF) . chr(($len >> 8) & 0xFF) . chr(($len) & 0xFF)); // Header length
            //fwrite($sHandle, "0000"); // Header reverse
            //fwrite($sHandle, $service);
            //fwrite($sHandle, $len);
            fwrite($sHandle, $body); // Header body

            /** Read from socket * */
            $buf = fread($sHandle, 2); // Header name "K2"
            $buf = fread($sHandle, 4); // Header version
            $service = (ord($buf{0}) << 24) | (ord($buf{1}) << 16) | (ord($buf{2}) << 8) | (ord($buf{3}));
            //$buf = fread($sHandle, 2); // Header service
            $buf = fread($sHandle, 4); // Header length
            $length = (ord($buf{0}) << 24) | (ord($buf{1}) << 16) | (ord($buf{2}) << 8) | (ord($buf{3}));
            //$buf = fread($sHandle, 4); // Header reverse

            $buf = "";
            $count = 0;
            while ($count < $length) {
                $data = fread($sHandle, $length);
                if ($data == null) {
                    break;
                }
                $count += strlen($data);
                $buf = $buf . $data;
            }
            fclose($sHandle);

            $res = json_decode($buf, true);
            return $res;
        }
    }
}