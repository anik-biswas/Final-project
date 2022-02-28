<?php

namespace App\Http\Controllers\Admin;

use App\Enums\MainCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\categoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data["category_list"] = $this->categoryRepo->GetCategoryListWithProducts();
        $data["category_list"] = Category::get();
        return view('admin.categories.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["main_category"]=MainCategory::asSelectArray();
        return view('admin.categories.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(categoryRequest $request)
    {
        $category= new Category();
        $category->name = $request->name;
        $category->main_category_id = $request->main_category_id;
        $category->save();
        flash('Successfully Created')->success();
        return redirect('/admin/categories');
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
        $category =Category::find($id);
        if (!$category) {
            return redirect('/admin/categories');
        }
        $data["category"] = $category;

        $data["main_category"] = MainCategory::asSelectArray();
        return view('admin.categories.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category= Category::find($id);
        if(!$category){
            return redirect('admin/categories');
        }
        $category->name = $request->name;
        $category->save();
        flash('Successfully Updated')->success();
        return redirect('admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category= Category::find($id);
        if(!$category){
            return redirect('admin/categories');
        }
        $category->delete();
        flash('Successfully Deleted')->success();
        return redirect("admin/categories");
    }
}
