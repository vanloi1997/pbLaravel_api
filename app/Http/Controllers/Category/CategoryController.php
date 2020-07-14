<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Category;


class CategoryController extends Controller
{
    //
    public function index(){
        $data = Category::get();
        return response()->json(['data' => $data]);
    }
    public function show(Request $req){
        $data = Category::where('id',$req->category)->first();
        return response()->json(['data' => $data]);
    }
    public function store(Request $req){
        $name = $req->name;
        $is_active = $req->is_active;
        $slug = str_slug($name, '-');
        $result = Category::insert([
            'name' => $name,
            'is_active' => $is_active,
            'slug' => $slug
        ]);
        return response()->json(['data' => $result]);
    }

    public function update(Request $req){
        $id = $req->category;
        $slug = str_slug($req->name, '-');
        $data = Category::where('id', $id)->update(['name' => $req->name ,'is_active' => $req->is_active, 'slug' => $slug]);
        return response()->json(['data' => $data]);
    }
    
    public function destroy($id){
        $data = Category::where('id', $id)->delete();
        return response()->json(['data' => $data]);
    }
}
