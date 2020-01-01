<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLinhVucRequest extends FormRequest
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
            'ten_linh_vuc'  => 'bail|unique:linh_vuc|required|max:30|min:2',
        //    'ten_linh_vuc'  => 'bail|unique:linh_vuc' 
        ];
    }
    
    public function messages()
    {
        return[
            'ten_linh_vuc.required' => 'Nhập Tên Lĩnh Vực',
            'ten_linh_vuc.min'      => 'Tên lĩnh vực phải chưa ít nhất 2 ký tự',
            'ten_linh_vuc.max'      => 'Tên lĩnh vực không được vượt quá 30 ký tự',
            'ten_linh_vuc.unique'   => 'Lĩnh Vực đã tồn tại'
        ];
    }
}
