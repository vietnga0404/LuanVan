<?php

namespace App\Http\Requests\Departments;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\GiangVien;

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
            $giangvien = GiangVien::where('gv_ma', $id)->first();
            $rule['ma'] = [
                'required',
                Rule::unique('giangvien', 'gv_ma')->ignore($giangvien->gv_ma, 'gv_ma'),
            ];
            $rule['name'] = [
                'required',
                Rule::unique('giangvien', 'gv_ten')->ignore($giangvien->gv_ten, 'gv_ten'),
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
 