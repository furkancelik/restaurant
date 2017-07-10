<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{

  protected $fillable = [
    'menu_title',
    'menu_phone',
    'about_page',
    'chef_page',
    'address',
    'reservation_phone',
    'working_hours',
    'facebook',
    'twitter',
    'youtube',
    'copyright'];

    //  protected $table = 'configs';

}
