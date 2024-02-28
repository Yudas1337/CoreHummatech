<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'description' => 'min:8|required',
            'category' => 'array|required',
            'category.*' => 'required',
            'image' => 'array|required',
            'image.*' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.min' => 'Masukkan minimal 5 karakter pada kolom "Judul"',
            'title.required' => 'Harap masukkan judul dahulu',
            'description.min' => 'Masukkan minimal 8 karakter pada kolom "Deskripsi"',
            'description.required' => 'Harap masukkan deskripsi dahulu',
            'image.mimes' => 'Format gambar tidak valid. Harap pilih format jpeg, png, atau jpg',
            'image.required' => 'Harap pilih thumbnail gambar',
            'category_news_id.required' => 'Harap pilih kategori berita',
            'category_news_id.exists' => 'Kategori berita tidak valid',
        ];
    }
}
