<?php

namespace App\Http\Requests;

use App\Rules\BdPhone;
use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => ['required', 'string'],
            "father_name" => ['required', 'string'],
            "mother_name" => ['required', 'string'],
            "gender" => ['required', 'string'],
            "date_of_birth" => ['required', 'date'],
            "education" => ['required', 'string'],
            "occupation" => ['required', 'string'],
            "mobile" => ['required', 'numeric',new BdPhone],
            "guardian_mobile" => ['required', 'string'],
            "email" => ['required', 'email'],
            "present_address" => ['required', 'string'],
            "permanent_address" => ['required', 'string'],
            "type" => ['required', 'string'],
            "course_id" => ['required', 'numeric'],
            "batch_id" => ['required', 'numeric'],
            "roll" => ['required', 'numeric'],
            "registration_no" => ['required', 'string'],
            "academic_year" => ['required', 'string'],
            "session" => ['required', 'string'],
            "fee" => ['required', 'numeric'],
            "discount" => ['nullable', 'numeric'],
            "payable" => ['required', 'numeric'],
            "first" => ['required', 'numeric'],
            "first_date" => ['required', 'date'],
            "second" => ['nullable', 'numeric'],
            "second_date" => ['nullable', 'date'],
            "third" => ['nullable', 'numeric'],
            "third_date" => ['nullable', 'date'],
            "ref" => ['nullable', 'string'],
            "ref_address" => ['nullable', 'string'],
            "ref_mobile" => ['nullable', 'numeric'],
            'photo' => ['nullable', 'image','mimes:jpg,bmp,png'],
           'avatar_id'=>['nullable','numeric'], // for pending aproved
           'remove_pending'=>['nullable','numeric'],// for pending aproved
        ];
    }
}
