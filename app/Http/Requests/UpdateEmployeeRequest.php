<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateEmployeeRequest extends FormRequest
{
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
        return [
            'name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:employees,email,' . $this->route('employee'),
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:10|unique:employees,phone,' . $this->route('employee'),
        ];
    }

         /**
     * Listener on validation fails.
     *
     * @return array
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'error' => $validator->errors()->all()[0],
            'message' => $validator->errors()->all()[0]
        ]));

    }
}
