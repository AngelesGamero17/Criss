<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDetalleventaRequest extends FormRequest
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
            'fecha' => 'required|date',
            'costofinal' => 'required|numeric|max:100',
            'nombre'=>'required|string|max:30',
            'cantidad' => 'required|numeric|max:100',
            'costoProducto' => 'required|numeric|max:100'
        ];
    }
}
