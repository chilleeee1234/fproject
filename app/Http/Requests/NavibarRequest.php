<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NavibarRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'navi_name' => 'string',
            'description' => 'string|nullable|max:255',
            'user_id' => 'required|integer',
        ];
    }
}
