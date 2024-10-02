<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Updateprofile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'name' => 'required|string|max:255',   
            'password' => 'nullable|string|min:8',
            'phone'=>'required',
            'message'=>'required',
            'address'=>'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Dưới 1MB

        ];
    }
    public function messages()
    {
        return [

            'name.required' => 'User name là bắt buộc.',
            'email.required' => 'Email không cho phép thay đổi.',
            'phone.required' =>'Phone là bắt buộc',
            'message.required'=>'message là bắt buộc',
            'address.required'=>'Địa chỉ là bắt buộc',
            'avatar.required'=>'Avatar là bắt buộc',
            'avatar.image' => 'Avatar phải là định dạng ảnh.',
            'avatar.max' => 'Dung lượng Avatar phải nhỏ hơn 1MB.',

        ];
    }
}
