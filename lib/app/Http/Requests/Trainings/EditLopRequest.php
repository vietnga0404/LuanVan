<?php

namespace App\Http\Requests\Trainings;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $ma = $this->request->get('ma');
        $name = $this->request->get('name');

        $id = $this->route('id');
        $rule = [];

        if ($id) {
            $lop = '\App\Models\Lop'::where('l_malop', $id)->first();
            $rule['ma'] = [
                'required',
                Rule::unique('lop', 'l_malop')->ignore($lop->l_malop, 'l_malop'),
            ];
            $rule['name'] = [
                'required',
                Rule::unique('lop', 'l_tenlop')->ignore($lop->l_tenlop, 'l_tenlop'),
            ];
        }
        return $rule;
    }
    public function messages()
    {
        return [
            'ma.unique' => 'Mã lớp đã bị trùng!',
            'name.unique' => 'Tên lớp đã bị trùng!'
        ];
    }
}
