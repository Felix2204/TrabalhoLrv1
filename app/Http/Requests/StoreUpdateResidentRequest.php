<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateResidentRequest extends FormRequest
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
            'nome' => 'required |min:3|max:255|unique:residents',
            'bloco' => 'required |min:1|max:255|',
            'predio' => 'required |min:1|max:255|',
            'apartamento' => 'required |min:1|max:255|',
        ];
    }
}