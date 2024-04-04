<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    public function home(){
        $products = Product::all();
        $categories = Category::all();
        return view('product.view')->with(["products" => $products, "categories"=>$categories]);
    }

    public function viewProduct(){
        $products = Product::all();
        $categories = Category::all();
        return view('product.view')->with(["products" => $products, "categories"=>$categories]);
    }

    public function viewCreateProduct(){
        $categories = Category::all();
        return view('product.create')->with("categories", $categories);
    }
    public function viewUpdateForm($id)
    {
        $category = Category::find($id);
        return view('product.update')->with("category", $category);
    }


    public function createProduct(ProductRequest $request){
        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $request->file('image')->move(public_path('images'),$imageName);
            $product->image = $imageName;
        }
        $product->stock = $request->input('stock');
        $product->description = $request->input('description');
        $product->category_id = $request->input('category');
        $product->save();
        var_dump($product);
        // return redirect('/');
        // $product = Product::create($request->all());
        // {
        //     $product->save();
        // }
        dd($product);
        // return redirect("product/view");
    }
    public function updateProduct(ProductRequest $request){
        $update = product::find($id);
        $product->name = $request->input('');
        $product->price = $request->input('');
        if ($request->hasFile('')) {
            $image = $request->file('');
            $imageName = $image->getClientOriginalName();
            $request->file('')->move(public_path('images'),$imageName);
            $product->image = $imageName;
        }
        $product->stock = $request->input('');
        $product->description = $request->input('');
        $product->category_id = $request->input('');
        $product->save();
    }
    public function destroyProduct($id){
        $delete = product::find($id);
        $delete->delete();
    }
}
