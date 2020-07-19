<?php

namespace App\Http\Controllers\Providers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Provider;
class ProvidersController extends Controller
{
    //
    public function index(){
        $data = Provider::get();
        return response()->json(['items' => $data]);
    }
    public function show(Request $req){
        $data = Provider::where('id',$req->provider)->first();
        $data->isActive = $data->is_active;
        return response()->json($data);
    }
    public function store(Request $req){
        $name = $req->name;
        $is_active = $req->isActive;
        $website = $req->website;
        $slug = str_slug($name, '-');
        $result = Provider::insert([
            'name' => $name,
            'website' => $website,
            'is_active' => $is_active,
            'slug' => $slug
        ]);
        return response()->json(['items' => $result]);
    }

    public function update(Request $req){
        $id = $req->provider;
        $slug = str_slug($req->name, '-');
        $data = Provider::where('id', $id)->update(['name' => $req->name ,'is_active' => $req->isActive, 'slug' => $slug, 'website' => $req->website]);
        return response()->json(['item' => $data]);
    }
    
    public function destroy($id){
        $data = Provider::where('id', $id)->delete();
        return response()->json(['affected'=> $data]);
    }
}
