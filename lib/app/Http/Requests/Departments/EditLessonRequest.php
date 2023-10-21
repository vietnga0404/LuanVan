<?php

namespace App\Http\Requests\Departments;

use App\Models\BaiGiang;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditLessonRequest extends FormRequest
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
            $baigiang = BaiGiang::where('b_mabai', $id)->first();
            $rule['ma'] = [
                'required',
                Rule::unique('baigiang', 'b_mabai')->ignore($baigiang->b_mabai, 'b_mabai'),
            ];
            $rule['name'] = [
                'required',
                Rule::unique('baigiang', 'b_tenbai')->ignore($baigiang->b_tenbai, 'b_tenbai'),
            ];
        }
        return $rule;
    }
    public function messages(){
        return [
            'ma.unique'=>'Mã bài giảng đã bị trùng!',
            'name.unique'=>'Tên bài giảng đã bị trùng!'
        ];
    }
}
