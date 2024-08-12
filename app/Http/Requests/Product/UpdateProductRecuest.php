<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRecuest extends FormRequest
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
            "name" => "string|unique:categories,name",
            "description" => "string",
            "price"=>"numeric|min:0",
            "stock"=>"integer|min:0",
        ];
    }

    public function messages(): array
    {
        return[            
            "name.unique" => "El nombre ya esta registrado",
            "name.string" => "El nombre debe ser un texto",            
            "description.string" => "La descripcion debe ser obligatorio",             
            "price.numeric"=>"El campo debe ser numerico",
            "price.min"=>"No puede tener precios menores a 0",            
            "stock.integer"=>"El campo de stock debe ser entero",    
            "stock.min"=>"El campo debe ser mayor a 0",
        ];
    }
}
