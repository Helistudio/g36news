<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class PaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pin' => 'required',
            'serial' => 'required',
            'username' => 'required',
            'amountUser' => 'required',
            'provider' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'pin.required' => 'Chưa nhập mã thẻ',
            'serial.required' => 'Chưa nhập serial thẻ',
            'username.required' => 'Chưa điền Username',
            'amountUser.required' => 'Chưa chọn mệnh giá thẻ',
            'provider.required' => 'Chưa chọn nhà mạng',
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param \Illuminate\Contracts\Validation\Validator $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        $res = ['code' => -1212, 'message' => ''];
        $list_error = [];
        foreach ($errors as $error) {
            $list_error[] = $error[0];
        }
        $res['message'] = implode(' - ', $list_error);

        throw new HttpResponseException(
            response()->json($res, JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
        );
    }
}
