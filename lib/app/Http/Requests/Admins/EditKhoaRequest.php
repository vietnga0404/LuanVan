<?php

namespace App\Http\Requests\Admins;

use Illuminate\Foundation\Http\FormRequest;

class EditKhoaRequest extends FormRequest
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
            'ma'=>'unique:khoa,k_makhoa,'.$this->segment(5).',k_makhoa',
            'name'=>'unique:khoa,k_tenkhoa,'.$this->segment(5).',k_makhoa'
        ];
    }
    public function messages(){
        return [
            'ma.unique'=>'Mã khoa đã bị trùng!',
            'name.unique'=>'Tên khoa đã bị trùng!'
        ];
    }
}
