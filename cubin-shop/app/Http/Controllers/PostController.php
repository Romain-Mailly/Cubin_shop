<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function getid($id){
        $product = DB::select("select * from produits where pro_id = $id");
        
        $url = 'photos_cube/'. $product[0]->pro_id.'.'.$product[0]->pro_photo;
       
        return view('product', ['product' => $product,'url' => $url ]);
                                  
    }

    public function getpros(){
        $products = DB::select('select * from produits');
     
        return view('products', ['products' => $products]);
    }

    public function index(){

        return view('index');
    }

    public function product(){
        

        return view('product');
    }
    
    public function contact(){
        return view('contact');
    }
    
    public function modif($id){

        $product = DB::select("select * from produits where pro_id = $id");
        

        return view('modif', ['product' => $product]);        
    }
    
    public function delete($id){

        $product = DB::select("select * from produits where pro_id = $id");

        $url = 'photos_cube/'. $product[0]->pro_id.'.'.$product[0]->pro_photo;

        return view('delete', ['product' => $product, 'url' => $url]);
    }

    public function create(){

        return view('create');

    }

    public function store(Request $request){
        
        DB::table('produits')->insert([
            'pro_cat_id' => $request->cat_id,
            'pro_fou_id' => $request->fou_id,
            'pro_ref' => $request->ref,
            'pro_libelle' => $request->libelle,
            'pro_desc' => $request->desc,
            'pro_prix' => $request->prix,
            'pro_stock' => $request->stock,
            'pro_couleur' => $request->couleur,
            'pro_photo' => $request->photo

        ]);
        
        return redirect('/');
    }

    public function storeUp($id, Request $request){

            
        DB::update("update produits set pro_cat_id = $request->cat_id where pro_id = $id");
        DB::update("update produits set pro_fou_id = $request->fou_id where pro_id = $id");
        DB::update("update produits set pro_ref = '$request->ref' where pro_id = $id");
        DB::update("update produits set pro_libelle = '$request->libelle' where pro_id = $id");
        DB::update("update produits set pro_desc = '$request->desc' where pro_id = $id");
        DB::update("update produits set pro_prix = '$request->prix' where pro_id = $id");
        DB::update("update produits set pro_stock = $request->stock where pro_id = $id");
        DB::update("update produits set pro_couleur = '$request->couleur' where pro_id = $id");
        DB::update("update produits set pro_photo = '$request->photo' where pro_id = $id");

        return redirect('/');
    }

    public function storeDel($id){
        DB::delete("delete from produits where pro_id = $id");
        return view('products');
    }
}
