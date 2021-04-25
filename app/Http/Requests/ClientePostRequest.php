<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientePostRequest extends FormRequest
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
            'nit' => [
                'nullable','max:45'
            ],
            'nombre' => [
                'nullable','max:45'
            ],
            'fecha_de_nacimiento' => [
                'required','max:45'
            ],
            'correo' => [
                'nullable','max:45'
            ],
            'telefono' => [
                'nullable','max:45'
            ],
            'id_categoria' => [
                'nullable','max:45'
            ],
            'id_genero' => [
                'nullable','max:45'
            ],
            'id_departamento' => [
                'nullable','max:45'
            ],
        ];
    }
}
