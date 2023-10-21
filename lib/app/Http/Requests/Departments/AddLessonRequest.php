<?php

namespace App\Http\Requests\Departments;

use Illuminate\Foundation\Http\FormRequest;

class AddLessonRequest extends FormRequest
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
            'ma' => 'unique:baigiang,b_mabai',
            'name' => 'unique:baigiang,b_tenbai'
        ];
    }

    public function messages(){
        return [
            'ma.unique' => 'Mã bài giảng đã bị trùng!',
            'name.unique' => 'Tên bài giảng đã bị trùng!'
        ];
    }
}
