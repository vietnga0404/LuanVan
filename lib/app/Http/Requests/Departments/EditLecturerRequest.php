<?php

namespace App\Http\Requests\Departments;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditLecturerRequest extends FormRequest
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
        $ma = $this->request->get('ma');
        $name = $this->request->get('name');

        $id = $this->route('id');
        $rule = [];

        if ($id) {
            $giangvien = '\App\Models\GiangVien'::where('gv_ma', $id)->first();
            $rule['id'] = [
                'requied',
                Rule::unique('giangvien', 'ma')->ignore($giangvien->id),
            ];
        }
        return $rule;
    }
    public function messages(){
        return [
            'ma.unique'=>'Mã giảng viên đã bị trùng!',
            'name.unique'=>'Tên giảng viên đã bị trùng!'
        ];
    }
}
