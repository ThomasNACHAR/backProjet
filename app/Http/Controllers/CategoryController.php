<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function editCategory()
    {
        $categories = Category::all();
        return view("category/edit")->with("categories",$categories);
    }
    public function create(){
        return view("category/create");
    }
    public function createCategory(CategoryRequest $request)
    {
        $category = Category::create($request->all());
        {
            $category->save();
        }
        return redirect("category/edit");
    }
    public function update($id){
        $category = Category::find($id);
        return view("category/update")->with("category",$category);
    }
    public function updateCategory(CategoryRequest $request, $id)
    {
        $update = category::find($id);
        $update->name = $request->input('name');
        $update->description = $request->input('description');
        $update->save();

        return redirect("category/edit");
    }
    public function destroyCategory($id)
    {
        $delete = Category::find($id);
        $delete->delete($id);
        return redirect("/category/edit");
    }
}
