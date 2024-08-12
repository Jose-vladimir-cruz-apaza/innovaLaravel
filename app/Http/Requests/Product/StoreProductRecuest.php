<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRecuest extends FormRequest
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
            "name" => "required|string|unique:products,name",
            "description" => "required|string",
            "price"=>"required|numeric|min:0",
            "stock"=>"required|integer|min:0",

        ];
    }

    public function messages(): array
    {
        return[
            "name.required" => "El campo nombre es obligatorio",
            "name.unique" => "El nombre ya esta registrado",
            "name.string" => "El nombre debe ser un texto",
            "description.required" => "El campo descripcion es obligatorio",
            "description.string" => "La descripcion debe ser un texto", 
            "price.required"=>"El campo precio es requerido",
            "price.numeric"=>"El campo debe ser numerico",
            "price.min"=>"No puede tener precios menores a 0",
            "stock.required"=>"El campo de stock es requerido",
            "stock.integer"=>"El campo de stock debe ser entero",    
            "stock.min"=>"El campo debe ser mayor a 0",
        ];
    }
}
