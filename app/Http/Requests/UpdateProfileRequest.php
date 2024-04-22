<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'title' => 'max:255',
            'subtitle' => 'max:255',
            'image' => 'nullable|mimes:png,jpg',
            'description' => 'required',
            'address' => 'required',
            'email' => 'required',
            'type' => 'required',
            'phone' => 'required',
            'proposal' => 'required|url'
        ];
    }
}
