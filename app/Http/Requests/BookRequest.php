<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// php artisan make:request BookRequest
class BookRequest extends FormRequest
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
            'title' => 'required|min:5|max:25',
            'pages' => 'required|integer|min:1|max:1000',
            'quantity' => 'required|integer|min:0|max:100',
            'author_id' => 'nullable|exists:authors,id|integer'
        ];
    }
}
