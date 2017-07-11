<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
  protected $fillable = ['title'];

  public function details()
 {
     return $this->hasMany('App\MenuDetail','category_id','id');
 }
}
