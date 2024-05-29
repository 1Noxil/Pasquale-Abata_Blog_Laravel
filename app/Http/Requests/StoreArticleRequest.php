<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'authors' => 'string||required',
            'titles' => 'string||required',
            'categorys' => 'string||required',
            'txt_articles' =>'required',
        ];
    }

    public function messages()
    {
        return [
            'authors.required' => "L'autore è obbligatorio",
            'titles.required' => "Il titolo è obbligatorio",
            'categorys.required'=> "La categoria è obbligatoria",
            'txt_article.required'=> "Il testo dell'articolo è obbligatorio",
        ];
    }
}
