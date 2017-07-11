<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MenuCategory;
use App\MenuDetail;
use App\Http\Requests\MenuDetailRequest;

class MenuDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $rows = MenuDetail::with('category')->get();
      return view('backend/menu_details/index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = MenuCategory::all()->lists('title','id');
      return view('backend/menu_details/create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuDetailRequest $request)
    {
      $data = $request->except(['_method','_token']);
      $create = MenuDetail::create($data);

       if ($create){
         flash('Başarıyla kaydedildi')->success();
         return redirect()->route('admin.menu-detail.index');
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
      $data = MenuDetail::find($id);
      $categories = MenuCategory::all()->lists('title','id');
      // dd($data->category->toArray());
      return view('backend/menu_details/edit',compact('data','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $data = $request->except(['_method','_token']);
      $update = MenuDetail::where('id', $id)->update($data);

       if ($update){
         flash('Başarıyla güncellendi')->success();
         return redirect()->route('admin.menu-detail.index');
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
      if (MenuDetail::destroy($id)){
        flash('Başarıyla Silindi')->success();
        return redirect()->route('admin.menu-detail.index');
      }else {
        flash('Bir hata meydana geldi ve silinemedi')->error();
        return redirect()->back();
      }
    }
}
