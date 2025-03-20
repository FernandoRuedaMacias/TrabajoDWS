<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatosCliente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:100',
            'telefono' => 'required|string|regex:/^[6789]\d{8}$/',
            'tarj_credito' => 'required|string|min:13|max:19'
        ];
    }

    public function messages(){

        return [
            'nombre.required' => 'El nombre debe ser obligatorio',
            'nombre.max' => 'El nombre debe tener maximo 100 caracteres',
            'telefono.required' => 'El telefono debe ser obligatorio',
            'telefono.regex' => 'El telefono esta mal escrito',
            'tarj_credito.required' => 'La tarjeta de credito tiene ser obligatoria',
            'tarj_credito.max' => 'La tarjeta de credito tiene que tener como maximo 19 digitos',
            'tarj_credito.min' => 'La tarjeta de credito tiene que tener como minimo 13 digitos'
    ];

    }
}
