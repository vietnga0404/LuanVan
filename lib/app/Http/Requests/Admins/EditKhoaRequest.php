<?php

namespace App\Http\Requests\Admins;

use App\Models\Khoa;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $ma = $this->request->get('ma');
        $name = $this->request->get('name');

        $id = $this->route('id');
        $rule = [];

        if ($id) {
            $khoa = Khoa::where('k_makhoa', $id)->first();
            $rule['ma'] = [
                'required',
                Rule::unique('khoa', 'k_makhoa')->ignore($khoa->k_makhoa, 'k_makhoa'),
            ];
            $rule['name'] = [
                'required',
                Rule::unique('khoa', 'k_tenkhoa')->ignore($khoa->k_tenkhoa, 'k_tenkhoa'),
            ];
        }
        return $rule;
    }
    public function messages()
    {
        return [
            'ma.unique' => 'Mã khoa đã bị trùng!',
            'name.unique' => 'Tên khoa đã bị trùng!'
        ];
    }
}
