<?php

namespace App\Http\Controllers\Admin;

use App\Enums\MainCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Interfaces\ICategoryRepository;
use Yajra\DataTables\DataTables;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryRepo;

    public function __construct(ICategoryRepository $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $data["category_list"] = $this->categoryRepo->myGet();
        //$data["category_list"] = $this->categoryRepo->myGet();
        
        return view('admin.categories.index', $data)->with('i', 1);
      // return view('admin.categories.index');

    }
    /* public function list()
    {
        return DataTables::of(Category::query())->make(true);
    } */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["main_category"] = MainCategory::asSelectArray();
        return view('admin.categories.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $this->categoryRepo->CreateCategory($request);
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
     
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->categoryRepo->myFind($id);
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
        $status = $this->categoryRepo->UpdateCategory($request, $id);
        return redirect('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->categoryRepo->DeleteCategory($id);
        return redirect('/admin/categories');
    }
}