<?php

namespace App\Http\Requests\Enduser\Student;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            //
            'name' => 'required|min:4|max:255|string',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            'headline' => 'nullable|max:255|string',
            'bio' => 'nullable|max:255|string',

        ];
    }
}
