<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class CategoryController extends Controller
{
    //
    public function index()
    {
      $categories = DB::table('categories')
                      ->select('id','name_category')
                      ->get();

      return view('admin.categories.show', compact('categories'));
    }

    public function create()
    {
      return view('admin.categories.create');
    }

    public function store()
    {
      Category::create([
        'name_category'=>request('name_category')
      ]);

      return redirect('/category.show')->with('success','Data success added');
    }

    public function show($id){
      $idCategory = (int)$id;

      $categories = DB::table('categories')
                    ->SELECT('name_category')
                    ->WHERE('id',$idCategory)
                    ->first();
    //dd($categories);
      return view('admin.categories.detail', compact('categories'));
    }

}
