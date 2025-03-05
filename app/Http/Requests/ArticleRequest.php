<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|min:5|max:200',
            'author' => 'required|min:4|max:200',
            'content' => 'required|min:50',
            'tag' => 'min:3'
        ];
    }

    public function messages(){
        return [
            'required' => 'Questo campo è obbligatorio',
            'min' => 'Questo campo deve contenere almeno :min caratteri',
            'max' => 'Questo campo può contenere massimo :max caratteri'
        ];
    }
}
