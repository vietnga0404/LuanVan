<?php

namespace App\Http\Requests\Departments;

use Illuminate\Foundation\Http\FormRequest;

class AddLecturerRequest extends FormRequest
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
            //
            'ma' =>'unique:giangvien,gv_ma',
            'name' => 'unique:giangvien,gv_ten'
        ];
    }
    public function messages(){
        return [
            'ma.unique' => 'Mã giảng viên đã bị trùng!',
            'name.unique' => 'Tên giảng viên đã bị trùng!'
        ];
    }
}
