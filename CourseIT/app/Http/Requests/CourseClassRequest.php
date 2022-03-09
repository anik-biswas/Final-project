<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseClassRequest extends FormRequest
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
            'name' => 'required|max:255',
            'course_id'=> 'required',
            'class_no'=> 'required|numeric',
            'course_video' => 'nullable|mimes:mp4,ppx,pdf,ogv,jpg,webm',

        ];
    }
}
