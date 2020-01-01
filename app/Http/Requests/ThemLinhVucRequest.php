<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemLinhVucRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'ten_linh_vuc'  => 'required | unique:linh_vuc|max:30|min:2|bail'
        ];
    }

    public function messages()
    {
        return[
            'ten_linh_vuc.required' => ' Nhập Tên Linh Vực!',
            'ten_linh_vuc.unique'   => 'Đã tồn tại lĩnh vực',
            'ten_linh_vuc.min'      => 'Tên Lĩnh Vực phải chứa ít nhất 2 ký tự',
            'ten_linh_vuc.max'      => 'Tên Lĩnh Vực không vượt quá 50 ký tự'
        ];
    }
}
