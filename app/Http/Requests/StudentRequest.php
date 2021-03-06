<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name'=> 'required',
            'school_mail'=>'required|email|unique:students|ends_with:mtu.edu.mm',
            'password'=> 'required',
            'confirm_password'=>'required|same:password',
            'student_id' => 'required|unique:students',
            'roll_no' => 'required'
        ];
    }
}
