<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
          Validator::extend('cpf_val', function($attribute, $value, $parameters, $validator) {

            $value = preg_replace('/[^0-9]/', '', (string) $value);

           // Valida tamanho
           if (strlen($value) != 11)
            return false;

           // Calcula e confere primeiro dígito verificador
           for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--)
               $soma += $value{$i} * $j;
               $resto = $soma % 11;

           if ($value{9} != ($resto < 2 ? 0 : 11 - $resto))
               return false;

           // Calcula e confere segundo dígito verificador
           for ($i = 0, $j = 11, $soma = 0; $i < 10; $i++, $j--)
               $soma +=$value{$i} * $j;
               $resto = $soma % 11;

           return $value{10} == ($resto < 2 ? 0 : 11 - $resto);
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
