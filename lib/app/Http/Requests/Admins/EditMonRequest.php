<?php

namespace App\Http\Requests\Admins;

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
            $rule['id'] = [
                'requied',
                Rule::unique('mon', 'ma')->ignore($mon->id),
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
