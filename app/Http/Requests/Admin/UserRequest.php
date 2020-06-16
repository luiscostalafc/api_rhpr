<?php

namespace App\Http\Requests\Admin;

use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ResponseTrait;

use App\Rules\Cpf;

class UserRequest extends FormRequest
{
    use ResponseTrait;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->method() == 'POST') {
            $this->typeFunction = 'create';
            return [
                'name' => 'required',
                'rg' => 'required|unique:users,rg',
                'password' => 'required',
                'cpf' => ['required', new Cpf],
                'workplace' => 'required',
                'system_id' => 'required|exists:systems,id'
            ];
        }
        if ($this->method() == 'PUT') {
            $this->typeFunction = 'update';
            return [
                'name' => 'required',
                'rg' => 'required|unique:users,rg',
                'cpf' => ['required', new Cpf],
                'workplace' => 'required',
                'system_id' => 'required|exists:systems,id'
            ];
        }
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 'name.required' => 'Name is required.',
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        $code = JsonResponse::HTTP_UNPROCESSABLE_ENTITY;
        $response = $this->mountReturn($this->typeFunction, [], $code, $errors);
        throw new HttpResponseException(response()->json($response->data, $response->status, $response->headers));
    }
}