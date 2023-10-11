<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return \Auth::check();
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama harus diisi',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'Nama',
        ];
    }
}
