<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'name' => 'required|min:10',
            'content' => 'required',
            'thumb' => 'mimes:jpeg,png,jpg,gif,svg'
        ];
    }
    public function messages(): array {
        return [
            'required' => ':attribute là trường bắt buộc',
            'min' => ':attribute phải có ít nhất :min kí tự',
            'mines' => 'Định dạng hình ảnh được cho phép: :mines'
        ];
    }
    public function attributes(): array{
        return [
            'name' => 'Tên bài viết',
            'content' => 'Nội dung',
            'thumb' => 'Hình ảnh'
        ];
    }
}
