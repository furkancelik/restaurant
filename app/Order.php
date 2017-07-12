<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['menu_id','full_name','phone','address'];

    public function menu()
   {
       return $this->hasOne('App\MenuDetail','id','menu_id');
   }
}
