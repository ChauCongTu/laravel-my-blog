<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:5|max:50',
            'email' => 'required|email|min:7',
            'content' => 'required|min:10|max:255'
        ];
    }
    public function messages(): array
    {
        return [
            'required' => ':attribute không được để trống',
            'min' => ':attribute phải có ít nhất :min ký tự',
            'max' => ':attribute chỉ được phép chứa tối đa :max ký tự',
            'email' => ':attribute không đúng định dạng'
        ];
    }
    public function attributes(): array
    {
        return [
            'name' => 'Họ tên',
            'email' => 'Địa chỉ Email',
            'content' => 'Nội dung bình luận'
        ];
    }
}
