<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
        if ($this->method()=="POST")
       {
           $rules = [
               'name'=>'required',
               'password'=>'required|confirmed',
               'email'=>'required|email|unique:users,email',
           ];
       }
       elseif($this->method()=="PUT")
       {
           $rules = [
               'name'=>'required',
               'password'=>'confirmed',
               'email'=>'required|email',
           ];
       }
       return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => "Adı Soyadı alanı boş bırakılamaz.",
            'password.required' => "Şifre alanı boş bırakılamaz.",
            'password.confirmed' => "Şifre alanları aynı değil.",
            'email.required' => "Email alanı boş bırakılamaz.",
            'email.email' => "Geçerli bir email adresi girmelisiniz.",
            'email.unique' => "Bu E-Mail adresi ile kullanıcı kayıt edilmiş.",
        ];
    }
}
