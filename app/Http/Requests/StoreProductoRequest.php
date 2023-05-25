<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
            'descripcion' => 'required|string|max:20',
            'estado'=>'required|numeric|max:2',
            'precio' => 'required|numeric|max:100',
            'stock' => 'required|numeric|max:20',
            'imagen' => 'required|string',
            'id_categorias' => 'required|numeric',
            'id_descuentos' => 'required|numeric',
           // 'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Máximo 2MB (2048 kilobytes)
        ];
    }
}
