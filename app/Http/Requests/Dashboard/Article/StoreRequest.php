<?php

namespace App\Http\Requests\Dashboard\Article;

use App\Http\Requests\BaseRequest;
use App\Rules\StatusRule;

class StoreRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'article_category_id' => 'required|exists:article_categories,id',
            'title' => 'required|max:150|unique:articles',
            'description' => 'required',
            'photo' => 'required|max:5000|mimes:jpg,png,jpeg',
            'content' => 'required',
            'status' => ['required', new StatusRule]
        ];
    }

    /**
     * Custom Validation Messages
     *
     * @return array<string, mixed>
     */

    public function messages(): array
    {
        return [
            'title.required' => 'Judul tidak boleh kosong',
            'title.max' => 'Judul maksimal 150 karakter',
            'title.unique' => 'Judul telah terdaftar',
            'article_category_id.required' => 'Kategori tidak boleh kosong',
            'description.required' => 'Deskripsi tidak boleh kosong',
            'photo.required' => 'Thumbnail tidak boleh kosong',
            'photo.max' => 'Thumbnail maksimal 5 Mb',
            'photo.mimes' => 'Thumbnail harus berupa jpg,png,jpeg',
            'content.required' => 'Konten tidak boleh kosong',
            'status.required' => 'Status tidak boleh kosong'
        ];
    }
}
