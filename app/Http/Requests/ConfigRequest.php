<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ConfigRequest extends Request
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
      return $rules =  [
        'menu_title'=>'required',
        'menu_phone'=>'required',
        'about_page'=>'required',
        'chef_page'=>'required',
        'address'=>'required',
        'reservation_phone'=>'required',
        // 'working_hours'=>'required',
        // 'facebook'=>'required',
        // 'twitter'=>'required',
        // 'youtube'=>'required',
        'copyright'=>'required',
      ];
    }


    public function messages()
    {
        return [
          'menu_title.required'=>'Menü Başlığı Alanı Boş Bırakılamaz',
          'menu_phone.required'=>'Menü Telefon Alanı Boş Bırakılamaz',
          'about_page.required'=>'Hakkımızda Sayfası Alanı Boş Bırakılamaz',
          'chef_page.required'=>'Şeft Sayfası Alanı Boş Bırakılamaz',
          'address.required'=>'Adres Alanı Boş Bırakılamaz',
          'reservation_phone.required'=>'Rezervasyon Telefon Alanı Boş Bırakılamaz',
          // 'working_hours'=>'Çalışma Saatleri Alanı Boş Bırakılamaz',
          // 'facebook'=>'Facebook Alanı Boş Bırakılamaz',
          // 'twitter'=>'Twitter Alanı Boş Bırakılamaz',
          // 'youtube'=>'Youtube Alanı Boş Bırakılamaz',
          'copyright.required'=>'Footer Metni Alanı Boş Bırakılamaz',
        ];
    }
}
