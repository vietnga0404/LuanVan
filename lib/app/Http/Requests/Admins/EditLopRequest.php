<?php

namespace App\Http\Requests\Admins;

use Illuminate\Foundation\Http\FormRequest;

class EditLopRequest extends FormRequest
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
            'ma'=>'unique:lop,l_malop,'.$this->segment(5).',l_malop',
            'name'=>'unique:lop,l_tenlop,'.$this->segment(5).',l_malop'
        ];
    }
    public function messages(){
        return [
            'ma.unique'=>'Mã lớp đã bị trùng!',
            'name.unique'=>'Tên lớp đã bị trùng!'
        ];
    }
}
