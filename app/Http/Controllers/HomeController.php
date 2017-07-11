<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Config;
use App\MenuCategory;
use App\MenuDetail;
use App\OurSpecial;
use App\Order;



class HomeController extends Controller
{

  public function index(){
    $configs = Config::find(1);
    $menus = MenuCategory::with('details')->get();
    return view('frontend/index',compact('configs','menus'));
  }

  public function order(Request $request){
    $data = $request->except(['_token']);
    if($data['menu_id']==""){
      flash('Sipariş verebilmek için bir menü seçmelisiniz.')->error();
      return redirect('/#siparisver')->withInput();
    }else {

      $create = Order::create($data);
       if ($create){
         flash('Siparişiniz başarıyla kaydedildi.')->success();
         return redirect('/#siparisver');
       }else {
         flash('Bir hata meydana geldi ve siparişiniz kaydedilemedi')->error();
         return redirect('/#siparisver');
       }

    }
  }

}
