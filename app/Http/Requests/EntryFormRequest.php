<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntryFormRequest extends FormRequest
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
            "subject" => "required",
            "opinion" => "required|max:500",
            "company" => "required|max:50",
            "section" => "sometimes|max:50",
            "name"    => "required|max:20",
            "ruby"    => "sometimes|max:20",
            "tel"   => "required|numeric|max:20",
            "mailaddress"   => "required|email"

        ];
    }
    public function messages()
    {
        return [
            "subject.required" => "項目を選択してください",
            "opinion.required" => "内容を入力してください",
            "opinion.max" => "500文字以内で入力してください",
            "company.required" => "会社名 / 団体名を入力してください",
            "company.max"  => "50文字以内で入力してください",
            "section.max" => "50文字以内で入力してください",
            "name.required"  => "お名前名を入力してください",
            "name.max" => "20文字以内で入力してください",
            "ruby.max" => "20文字以内で入力してください",
            "tel.required" => "電話番号を入力してください",
            "tel.numeric"  => "数字のみで入力してください",
            "tel.max"      => "20文字以内で入力してください",
            "mailaddress.required" => "メールアドレスを入力してください",
            "mailaddress.email" => "メールアドレスが正しくありません",
        ];
    }
}
