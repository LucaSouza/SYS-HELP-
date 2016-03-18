<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestComputador extends Request
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
          "modelo" => "required|max:40",
          "so" => "required|max:30",
          "observacao" => "max:200",
          "ip" => "max:15",
          "email" => "max:50",
          "nome" => "max:20",
          "grupo" => "max:20",
          "programas" => "max:200",
          "setor" => "required"
        ];
    }
}
