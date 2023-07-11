<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email', 
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:10|max:500'
        ];
    }

    // public function attributes(){ // замена названия поля в сообщении об ошибке
    //     return [
    //         'name' => 'Имя',
    //         'email' => 'E-Mail',
    //         'subject' => 'Тема',
    //         'message' => 'Сообщение'
    //     ];
    // }

    public function messages(){ // замена всего текста ошибки
        return [
            'name.required' => 'Введите Имя',
            'email.required' => 'Введите E-mail',
            'subject.required' => 'Введите Тему',
            'message.required' => 'Введите Сообщение'
        ];
    }
}
