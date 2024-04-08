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

    //Fonction pour afficher les produits
    public function viewProduct(){
        $products = Product::all();
        return view('product.view')->with("products", $products);
    }

    //Fonction pour afficher le formulaire de création d'un nouveau produit
    public function viewCreateProduct(){
        $categories = Category::all();
        return view('product.create')->with("categories", $categories);
    }

    //Fonction pour afficher le formulaire de modification d'un produit
    public function viewUpdateForm($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('product.update')->with(["product" => $product, "categories"=>$categories]);
    }

    //Fonction pour ajouter un nouveau produit
    public function createProduct(ProductRequest $request) {
        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $request->file('image')->move(public_path('images'),$imageName);
            $product->image = $imageName;
        } else {
            $product->image = ""; // ou la valeur par défaut que vous avez définie
        }
        $product->stock = $request->input('stock');
        $product->description = $request->input('description');
        $product->category_id = $request->input('category');
        if ($request->hasFile('imageCreate')) {
            $image = $request->file('imageCreate');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('imageCreate'), $imageName); // Déplacer l'image vers le répertoire public/images
            $product->image = $imageName;
        }
        $product->save();
        return redirect("product/view");
    }
    

    //Fonction pour modifier un produit
    public function updateProduct(ProductRequest $request, $id){
        $product = product::find($id);
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
        return redirect("product/view");
    }

    //Fonction pour supprimer un produit
    public function deleteProduct($id){
        $delete = product::find($id);
        $delete->delete();
        return redirect("product/view");
    }
}
