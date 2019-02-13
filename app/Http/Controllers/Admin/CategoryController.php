<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getList()
    {
        return view('admin.category.list');
    }
    public function getAdd()
    {
        $parent = Category::select('id', 'name', 'parent_id')->get()->toArray();
        return view('admin.category.add',compact('parent'));
    }
    public function postAdd(CategoryRequets $requets)
    {
        $cate = new Category;
        $cate->name = $requets->txtCateName;
        $cate->alias = changeTitle($requets->txtCateName);
        $cate->order = $requets->txtOrder;
        $cate->parent_id = 1;
        $cate->keywords = $requets->txtKeyword;
        $cate->description = $requets->txtDescription;

        $cate->save();

        return redirect()->route('admin.cate.list')->with(['flash_level'=>'success',
            'flash_message'=>'Add category success']);
    }
}
