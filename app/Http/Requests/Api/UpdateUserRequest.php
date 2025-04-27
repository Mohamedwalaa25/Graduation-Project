<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'nullable|string',
            'image_name' => 'nullable|image'
        ];
    }



    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',

            'email.required' => 'The email field is required.',
            'email.string' => 'The email must be a string.',

            'password.string' => 'The password must be a string.',

            'image_name.image' => 'The file must be an image.'
        ];
    }


    protected function failedValidation(Validator $validator)
    {

        throw new HttpResponseException(
            response()->json([
                'status' => false,
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 422)
        );
    }

    public function getName()
    {

        return $this->name;
    }

    public function getEmail()
    {

        return $this->email;
    }

    public function getPassword(): string|null
    {


        return $this->password ?? null;
    }

    public function getImageName()
    {

        if ($this->hasFile('image_name')) {

            return  $this->file('image_name')->getClientOriginalName();
        } else {

            return  null;
        }
    }
}
