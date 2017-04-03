<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        /**
         * Phone validation regular expression found at http://stackoverflow.com/a/39331613
         *
         * Tried https://github.com/Propaganistas/Laravel-Phone but it was too restrictive, disallowing many entries
         * that might be used in an address book, like '5555555555' for example. In some applications, it may not be
         * a good idea to let the user exclude the country code, but this isn't one of them. It also lacked
         * informative error messages explaining how it wanted the number formatted, so it was cumbersome to the user
         *
         */

        Validator::extend('phone', function($attribute, $value, $parameters, $validator) {
            return preg_match('%^(?:(?:\(?(?:00|\+)([1-4]\d\d|[1-9]\d?)\)?)?[\-\.\ \\\/]?)?((?:\(?\d{1,}\)?[\-\.\ \\\/]?){0,})(?:[\-\.\ \\\/]?(?:#|ext\.?|extension|x)[\-\.\ \\\/]?(\d+))?$%i', $value) && strlen($value) >= 10;
        });

        Validator::replacer('phone', function($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute',$attribute, ':attribute must be a valid phone number.');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
