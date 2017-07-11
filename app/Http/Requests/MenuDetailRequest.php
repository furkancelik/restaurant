<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MenuDetailRequest extends Request
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
          'title'=>'required',
          'content'=>'required',
          'price'=>'required',
      ];
    }

    public function messages()
    {
        return [
          'title.required'=>'Menu Başlığı Alanı Boş Bırakılamaz.',
          'content.required'=>'Menu İçeriği Alanı Boş Bırakılamaz.',
          'price.required'=>'Fiyat Alanı Boş Bırakılamaz.',
        ];
    }
}
