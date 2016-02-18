<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestPeriferico extends Request
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
          "modelo" => "max:40",
          "descricao" => "max:60",
          "interface" => "max:20",
          "observacao" => "max:200"
        ];
    }
}
