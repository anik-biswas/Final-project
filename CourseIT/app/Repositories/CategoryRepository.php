<?php

namespace App\Repositories;

use App\Interfaces\ICategoryRepository;
use App\Models\Category;


class CategoryRepository extends BaseRepository implements ICategoryRepository
{
    //private $categoryModel;
    public function __construct(Category $model)
    {
        //$this->categoryModel= $model;
        parent::__construct($model);
    }

    public function CreateCategory($request)
    {
        $category = $this->model;
        $category->name = $request->name;
        $category->main_category_id = $request->main_category_id;
        $category->save();
        flash('Successfully Created')->success();
    }

    public function UpdateCategory($request,$id){
        $category = $this->myFind($id);
        if(!$category){
            return false;
        }
        $category->name = $request->name;
        $category->main_category_id = $request->main_category_id;
        $category->save();
        flash('Successfully Updated')->success();
        return true;
    }

    
}
