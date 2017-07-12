<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
      $rows = Order::all();
      return view('backend/orders/index',compact('rows'));
    }

    public function login(){
      return view('backend/login/login');
    }


    public function loginAction(Request $request)
    {
        $remember = false;
        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')], $remember))
        {
            return redirect()->route('admin.index');
        }else
        {
          flash('Bu bilgilere sahip kullanıcı bulunamadı.')->error();
          return redirect()->route('admin.login');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }



}
