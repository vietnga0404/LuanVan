<?php

namespace App\Http\Requests\Trainings;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $ma = $this->request->get('ma');
        $name = $this->request->get('name');

        $id = $this->route('id');
        $rule = [];

        if ($id) {
            $mon = '\App\Models\Mon'::where('m_mamon', $id)->first();
            $rule['ma'] = [
                'required',
                Rule::unique('mon', 'm_mamon')->ignore($mon->m_mamon, 'm_mamon'),
            ];
            $rule['name'] = [
                'required',
                Rule::unique('mon', 'm_tenmon')->ignore($mon->m_tenmon, 'm_tenmon'),
            ];
        }
        return $rule;
    }

    public function messages(){
        return [
            'ma.unique'=>'Mã môn đã bị trùng!',
            'name.unique'=>'Tên môn đã bị trùng!'
        ];
    }
}
