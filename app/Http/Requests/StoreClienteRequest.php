<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:20',
            'apellido' => 'required|string|max:20',
            'celular'=>'required|string|max:9',
            'direccion' => 'required|string|max:20',
            'dni' => 'required|string|max:20',
            'correo'=>'required|string|max:20',
        ];
    }
}
