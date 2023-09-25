<?php

namespace App\Http\Requests\Admins;

use Illuminate\Foundation\Http\FormRequest;

class EditMonRequest extends FormRequest
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
            'ma'=>'unique:mon,m_mamon,'.$this->segment(5).',m_mamon',
            'name'=>'unique:mon,m_tenmon,'.$this->segment(5).',m_mamon'
        ];
    }

    public function messages(){
        return [
            'ma.unique'=>'Mã môn đã bị trùng!',
            'name.unique'=>'Tên môn đã bị trùng!'
        ];
    }
}
