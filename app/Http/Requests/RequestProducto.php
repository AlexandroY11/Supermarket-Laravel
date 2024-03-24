<?php

namespace App\Http\Requests;

use DragonCode\Support\Facades\Helpers\Arr;
use Illuminate\Foundation\Http\FormRequest;

class RequestProducto extends FormRequest
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
            'nombre_producto' => 'required|min:3',
            'descripcion_producto' => 'required',
            'categoria' => 'required',
            'medida_producto' => 'required',
            'precio' => 'required|min:6',
            'stock' => 'required',
        ];
    }

    public function messages() : array
    {
        return [
            'nombre_producto' => 'El nombre del producto es obligatorio',
            'descripcion_producto' => 'La descripción del producto es obligatorio',
            'categoria' => 'La categoría es obligatoria',
            'medida_producto' => 'La medida del producto es obligatoria',
            'precio' => 'El precio es obligatorio',
            'stock' => 'El stock es obligatorio'
        ];
    }
}
