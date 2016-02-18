<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestCliente extends Request
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
          "nome" => "required",
          "identificacao" => "cpf_val|max:14",
          "telefone" => "max:10|",
          "celular" => "min:8|max:11",
          "rua" => "max:50",
          "numero" => "max:10",
          "complemento" => "max:50",
          "cep" => "max:8",
          "cidade" => "max:40",
          "uf" => "size:2"
        ];
    }
}
