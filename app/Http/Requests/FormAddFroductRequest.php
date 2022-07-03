<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormAddFroductRequest extends FormRequest
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
            'name'=>'required|max:300|string',
            'image'=>'required|filled|mimes:jpeg,png,jpg,gif,svg|max:25000',
            'price'=>'required|numeric|min:1',
            'promotionPrice'=>'required|numeric|min:1',
            'description'=>'string',
            'description'=>'string',
            'id_type'=>'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Bạn chưa nhập tên sản phẩm',
            'name.max'=>'Tên sản phẩm chỉ có tối đa 300 ký tự',
            'image.required'=>'Bạn chưa chọn ảnh',
            'image.filled'=>'Bạn chưa chọn ảnh',
            'image.max'=>'Kích thước ảnh tối đa là 25Mb',
            'price.required'=>'Bạn chưa nhập giá',
            'price.min'=>'Giá sản phẩm phải lớn hơn 1đ',
            'price.min'=>'Giá cũ sản phẩm phải lớn hơn 1đ',
            'promotionPrice.required'=>'Bạn chưa nhập giá',
            'promotionPrice.min'=>'Giá sản phẩm phải lớn hơn 1đ',
            'id_type'=>'Bạn chưa nhập loại sản phẩm'
        ];
    } 
}
