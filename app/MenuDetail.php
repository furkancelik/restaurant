<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class MenuDetail extends Model
{
    protected $fillable = ['category_id','title','content','price'];


    public function category()
   {
       return $this->hasOne('App\MenuCategory','id','category_id');
   }
}
