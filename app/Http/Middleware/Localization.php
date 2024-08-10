<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\App;

class Localization
{
    public function handle($request, Closure $next)
    {

        if(isset($_GET['lang'])) {
            if ($_GET['lang'] == "en") {
                App::setLocale("en");
            } else if ($_GET['lang'] == "vi") {
                App::setLocale("vi");
            }
        }
        return $next($request);
    }
}
