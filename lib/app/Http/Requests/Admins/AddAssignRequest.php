<?php

namespace App\Http\Requests\Admins;

use Illuminate\Foundation\Http\FormRequest;

class AddAssignRequest extends FormRequest
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
            'lop' => 'unique:lichday,ld_lop'
        ];
    }

    public function messages()
    {
        return [
            'lop.unique' => 'Lớp bị trùng! Đã phân công'
        ];
    }
}
