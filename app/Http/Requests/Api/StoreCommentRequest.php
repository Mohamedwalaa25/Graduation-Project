<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreCommentRequest extends FormRequest
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
            'content' => 'required|string|max:1000',
            'article_id' => 'required|exists:articles,id'
        ];
    }

    public function messages(): array
    {
        return [
            // Content field messages
            'content.required' => 'The comment content is required.',
            'content.string' => 'The comment must be a text.',
            'content.max' => 'The comment may not be longer than 1000 characters.',

            // Article ID messages
            'article_id.required' => 'An article reference is required.',
            'article_id.exists' => 'The selected article does not exist.'
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
