<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemCauHoiRequest extends FormRequest
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
            'noi_dung'            => 'bail|required|min:5|max:255|unique:cau_hoi',
            'linh_vuc_id'         => 'bail|required',
            'phuong_an_a'         => 'bail|required',
            'phuong_an_b'         => 'bail|required',
            'phuong_an_c'         => 'bail|required',
            'phuong_an_d'         => 'bail|required',
            'dap_an'              => 'bail|required'
        ];
    }
    public function messages()
    {
        return[
            'noi_dung.required'         => 'Vui lòng nhập nội dung câu hỏi',
            'noi_dung.min'              => 'Nội dung câu hỏi phải chứa ít nhất 5 ký tự',
            'noi_dung.max'              => 'Nội dung câu hỏi không quá 255 ký tự!',
            'noi_dung.unique'           => 'Nội dung câu hỏi đã tồn tại.',

            'linh_vuc_id.required'         => 'Vui lòng chọn lĩnh vực!',
            'phuong_an_a.required'      => 'Vui lòng nhập phương án A!',
            'phuong_an_b.required'      => 'Vui lòng nhập phương án B!',
            'phuong_an_c.required'      => 'Vui lòng nhập phương án C!',
            'phuong_an_d.required'      => 'Vui lòng nhập phương án D!',
            'dap_an.required'           => 'Đáp án đâu ??? '
        ];
        
    }
}
