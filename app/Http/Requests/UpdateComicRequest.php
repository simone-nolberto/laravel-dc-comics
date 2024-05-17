<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|min:3|max:50',
            'description' => 'nullable',
            'thumb' => 'required|max:255',
            'price' => 'required|max:15',
            'series' => 'nullable|max:50',
            'type' => 'nullable|max:20',
            'sale_date' => 'nullable|max:25',
        ];
    }
}
