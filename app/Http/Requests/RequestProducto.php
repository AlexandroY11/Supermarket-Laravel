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
            'slug' => 'required|unique:productos',
            'descripcion_producto' => 'required',
            'categoria' => 'required',
            'medida_producto' => 'required',
            'precio' => 'required|numeric|min:10000',
            'stock' => 'required',
        ];
    }

    public function messages() : array
    {
        return [
            'nombre_producto' => 'El nombre del producto es obligatorio',
            'slug.required' => 'El slug es obligatorio',
            'slug.unique' => 'El slug ya existe en la base de datos',
            'descripcion_producto' => 'La descripción del producto es obligatorio',
            'categoria' => 'La categoría es obligatoria',
            'medida_producto' => 'La medida del producto es obligatoria',
            'precio.required' => 'El precio es obligatorio',
            'precio.min' => 'El precio debe ser mayor a $10000',
            'stock' => 'El stock es obligatorio'
        ];
    }
}
