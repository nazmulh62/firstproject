<?php

namespace App\Http\Controllers;

use App\Category;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){

        return view('admin.category.add-category');
    }
    public function saveCategoryInfo(Request $request){

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/category/add')->with('message','Category Save Successfully');

    }
    public function manage(){
        $categories = Category::all();
        return view('admin.category.manage-category',['categories'=>$categories]);

    }
    public function unpublishedCategoryInfo($id){

        $categoryById = Category::find($id);
        $categoryById->publication_status = 0;
        $categoryById->save();
        return redirect('/category/manage-category');

    }
    public function publishedCategoryInfo($id){
        $categoryById = Category::find($id);
        $categoryById->publication_status = 1;
        $categoryById->save();
        return redirect('/category/manage-category');

    }
    public function editCategoryInfo($id){
        $categoryById = Category::find($id);
        return view('admin.category.edit-category',['categoryById'=>$categoryById]);
    }

    public function updateCategoryInfo(Request $request){
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/category/manage-category');

    }
    public function deleteCategoryinfo($id){
        $categoryById = Category::find($id);
        $categoryById->delete();
        return redirect('/category/manage-category');

    }
}
