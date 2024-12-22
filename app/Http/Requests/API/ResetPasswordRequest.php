<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends MasterApiRequest
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
            'phone' => 'required|numeric|exists:users,phone',
            'password' => 'required|min:8|max:255|confirmed',
        ];
    }
}
