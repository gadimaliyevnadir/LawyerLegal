<?php

namespace App\Http\Requests\RightAligned;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'image' => 'image|mimes:jpg,png,jpeg,webp',
            'desc' => 'required|array',
            'desc.*' => 'required|string|min:3'
        ];
    }
}
