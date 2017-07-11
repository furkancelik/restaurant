<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\MenuCategory;
use App\Http\Requests\MenuCategoryRequest;

class MenuCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = MenuCategory::all();
        return view('backend/menu_categories/index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/menu_categories/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuCategoryRequest $request)
    {


        $data = $request->except(['_method','_token']);
        $create = MenuCategory::create($data);

         if ($create){
           flash('Başarıyla kaydedildi')->success();
           return redirect()->route('admin.menu-category.index');
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
      $data = MenuCategory::find($id);
      return view('backend/menu_categories/edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuCategoryRequest $request, $id)
    {
      $data = $request->except(['_method','_token']);
      $update = MenuCategory::where('id', $id)->update($data);

       if ($update){
         flash('Başarıyla güncellendi')->success();
         return redirect()->route('admin.menu-category.index');
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
        if (MenuCategory::destroy($id)){
          flash('Başarıyla Silindi')->success();
          return redirect()->route('admin.menu-category.index');
        }else {
          flash('Bir hata meydana geldi ve silinemedi')->error();
          return redirect()->back();
        }
    }
}
