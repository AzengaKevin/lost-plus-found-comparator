<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReportRequest extends FormRequest
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
            'person_name' => ['required'],
            'person_national_identification_number' => ['numeric'],
            'person_birth_certificate_number' => ['required_unless:person_national_identification_number,true'],
            'person_passport_number' => ['required_unless:person_birth_certificate_number,true'],
            'person_phone_number' => ['bail', 'numeric', 'nullable'],
            'person_date_of_birth' => ['bail', 'required' ,'date'],
            'extra_items' => ['array'],
            'last_seen' => ['bail', 'date'],
            'last_seen_place' => ['bail', 'required'],
            'last_seen_with' => ['array'],
        ];
    }
}
