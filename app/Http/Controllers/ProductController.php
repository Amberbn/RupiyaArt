<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use DB;

class ProductController extends Controller
{
    //show data dari Database
    public function index(){
      // $products = Product::all();

      $_products = DB::table('products')
                ->join('categories', 'categories.id', '=', 'products.category_id')
                ->select('products.id','products.name_product','categories.name_category','products.description')
                ->get();
      return view('admin.show',compact('_products'));
    }

    //Baca view add product
    public function create(){
      //$_categories = Category::all();
      $_categories = DB::table('categories')
                  ->select('id','name_category')
                  ->get();

      return view('admin.create', compact('_categories'));
    }

    //fungsi save product
    public function store(){
      Product::create([
        'name_product'=>request('name_product'),
        'description'=>request('description'),
        'category_id'=>request('category_id'),
        'image_url'=>str_slug(request('name_product'))
      ]);

      return redirect('/show')->with('success','Data success added');
    }

    //fungsi edit product --> get data berdasarkan id
    public function edit($id){
      $idProduct = (int)$id;

      $_categories = DB::table('categories')
                  ->select('id','name_category')
                  ->get();

      $_products = DB::table('products')
                ->join('categories','categories.id','=','products.category_id')
                ->select('products.id','products.name_product','products.description','products.category_id','categories.name_category as category_name')
                ->where('products.id',$idProduct)
                ->first();

      return view('admin.edit', compact('_products','_categories'));
      //dd($_products);
      // $_products =Product::join('categories','products.category_id','=','categories.id')
      //           ->select('products.id','products.name_product','products.description','products.image_url','products.category_id','categories.name_category')
      //           ->where('products.id',$idProduct)
      //           ->get();
      //           dd($_products);
      // $idProduct = (int) $id;
      // $_categories = Category::all();
      // $_products = Product::find($id);
      //
      // return view('admin.edit', compact('_products','_categories'));
    }

    //fungsi update product
    public function update($id){
        $_products = Product::find($id);

        $_products->update([
          'name_product'=>request('name_product'),
          'category_id'=>request('category_id'),
          'description'=>request('description'),
          'image_url'=>str_slug(request('name_product'))
        ]);

        return redirect('/show')->withInfo('Data success update');
    }

    //Menampilkan detail product
    public function show($id){
      $idProduct = (int)$id;

      $_products = DB::table('products')
                ->join('categories','categories.id','=','products.category_id')
                ->select('products.id','products.name_product','products.description','products.category_id','categories.name_category as category_name','products.image_url')
                ->where('products.id',$idProduct)
                ->first();
      //dd($_products);
      return view('admin.detail', compact('_products'));
    }

    //fungsi delete product --> get data bedasrkan id
    public function destroy($id){
      $idProduct = (int)$id;

      $_products = DB::table('products')
                ->join('categories','categories.id','=','products.category_id')
                ->select('products.id','products.name_product','products.description','products.category_id','categories.name_category as category_name','products.image_url')
                ->where('products.id',$idProduct)
                ->first();
      //dd($_products);
      return view('admin.delete', compact('_products'));
    }

    //fungsi delete product
    public function remove($id){
      $_products = Product::find($id);

      $_products->delete();
      return redirect('/show')->withDanger('Data success delete');
    }
}
