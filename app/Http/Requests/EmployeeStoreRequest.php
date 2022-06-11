<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
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
            'first_name' => ['required','min:2'],
            'last_name' => ['required','min:2'],
            'middle_name' => ['required'],
            'address' => ['required'],
            'state_id' => ['required'],
            'country_id' => ['required'],
            'city_id' => ['required'],
            'department_id' => ['required'],
            'birthdate' => ['required'],
            'date_hired' => ['required'],
            'zip_code' => ['required']

        ];
    }
}
