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
            'nombre' => 'required|min:3',
            'slug' => 'required|unique:productos',
            'descripcion' => 'required',
            'categoria' => 'required',
            'medida' => 'required',
            'precio' => 'required|numeric|min:10000',
            'stock' => 'required',
        ];
    }

    public function messages() : array
    {
        return [
            'nombre' => 'El nombre del producto es obligatorio',
            'slug.required' => 'El slug es obligatorio',
            'slug.unique' => 'El slug ya existe en la base de datos',
            'descripcion' => 'La descripción del producto es obligatorio',
            'categoria' => 'La categoría es obligatoria',
            'medida' => 'La medida del producto es obligatoria',
            'precio.required' => 'El precio es obligatorio',
            'precio.min' => 'El precio debe ser mayor a $10000',
            'stock' => 'El stock es obligatorio'
        ];
    }
}
