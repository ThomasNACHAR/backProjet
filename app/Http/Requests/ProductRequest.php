<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            //
            'name'=>'required|min:2|max:100',
            'price'=>'required|numeric',
            'stock'=>'required|min:0|numeric',
            
            'description'=>'required|min:2|max:2000', 
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Veuillez entrez un nom',
            'name.min' => 'Veuillez entrez au moins 2 caractères',
            'name.max' => 'Veuillez entrez moins de 100 caractères',
            'price.required' => 'Veuillez entrez un prix',
            'price.numeric' => 'Veuillez ne mettre que des chiffres',
            'stock.required' => 'Veuillez remplir le champ stock',
            'stock.min' => 'Veuillez entrez un chiffre supérieur à 0',
            'stock.numeric' => 'Veuillez ne mettre que des chiffres',
           
            'description.required' => 'Veuillez entrez une description',
            'description.min' => 'Veuillez entrez au moins 2 caractères',
            'description.max' => 'Veuillez entrez moins de 2000 caractères',
        ];
    }
}
