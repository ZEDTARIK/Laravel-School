<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudent extends FormRequest
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
            'student_number' => 'bail|required|min:1|max:10',
            'firstname' => 'bail|required|min:4|max:50',
            'lastname' => 'bail|required|min:4|max:50',
            'age' => 'bail|required|min:1|max:2',
            'class_id' => 'required|min:1|max:2',
            'parents' => 'required|min:4|max:100'
        ];
    }
}
