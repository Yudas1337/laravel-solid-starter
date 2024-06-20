<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

abstract class BaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    abstract public function rules(): array;

    /**
     * Return failed validation
     * @param Validator $validator
     *
     * @return RedirectResponse
     */

    protected function failedValidation(Validator $validator): RedirectResponse
    {
        return redirect()->back()->withErrors($validator->errors()->messages());
    }

    /**
     * Return failed authorization
     *
     * @return void
     */

    protected function failedAuthorization(): void
    {
        abort(Response::HTTP_FORBIDDEN);
    }
}
