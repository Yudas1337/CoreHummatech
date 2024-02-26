<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEnterpriseStructureRequest extends FormRequest
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
            'title' => 'required',
            'products.*' => 'min:1',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Kolom Judul harus diisi dahulu.',
            'products.*.min' => 'Tiap Kolom Produk tidak boleh kosong.',
        ];
    }
}
