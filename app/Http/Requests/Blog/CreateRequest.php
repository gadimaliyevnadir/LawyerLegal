<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|array',
            'title.*' => 'required|string|min:3',
            'tag_id'=>'required',
            'desc' => 'required|array',
            'desc.*' => 'required|string|min:3',
            'category_id'=>'numeric',
            'image' => 'required|image|mimes:jpg,png,jpeg,webp',
        ];
    }
}
