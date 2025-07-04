<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class GetLikesByArticleIdRequest extends FormRequest
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
            'article_id' => 'required|integer|exists:articles,id'
        ];
    }

    public function messages(): array
    {
        return [
            'article_id.required' => 'The article ID is required.',
            'article_id.integer' => 'The article ID must be an integer.',
            'article_id.exists' => 'The specified article does not exist.'
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
}
