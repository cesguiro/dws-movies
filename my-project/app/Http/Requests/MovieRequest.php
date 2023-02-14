<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'title' => 'required',
            'year' => 'required|numeric|min:1890|max:2023',
            'duration' => 'required|numeric|min:60|max:220',
            'director_id' => 'required|exists:directors,id'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El título es obligatorio',
            'year.min' => 'El año no puede ser anterior a 1890',
            //...
        ];
    }
}
