<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $rows = User::all();
      return view('backend/users/index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
       $data = $request->except(['_method','_token']);
       $data['password'] = bcrypt($data['password']);
       $create = User::create($data);

       if ($create){
         flash('Başarıyla kaydedildi')->success();
         return redirect()->route('admin.user.index');
       }else {
         flash('Bir hata meydana geldi ve kaydedilemedi')->error();
         return redirect()->back();
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = User::find($id);
      return view('backend/users/edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
      $data = $request->except(['_method','_token']);

      if ($data['password']=="")
       {
           unset($data['password'],$data['password_confirmation']);
       }else{
           unset($data['password_confirmation']);
           $data['password'] = bcrypt($data['password']);
       }

       $update = User::where('id', $id)->update($data);


       if ($update){
         flash('Başarıyla güncellendi')->success();
         return redirect()->route('admin.user.index');
       }else {
         flash('Bir hata meydana geldi ve güncellenemedi')->error();
         return redirect()->back();
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      if (User::destroy($id)){
        flash('Başarıyla Silindi')->success();
        return redirect()->route('admin.user.index');
      }else {
        flash('Bir hata meydana geldi ve silinemedi')->error();
        return redirect()->back();
      }
    }
}
