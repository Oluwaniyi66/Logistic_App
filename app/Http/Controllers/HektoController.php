<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\HektoProduct;
use Illuminate\Http\Request;

class HektoController extends Controller
{
    //
    public function AddProduct(Request $request)
    { 
        if($request->isMethod('post')){
            
        // dd($req->all());
        
        $collect_products = $request->all();
        //image one
        $file = $request->file('p_image');
        $name =$request->file('p_image')->getClientOriginalName();
        $destination = 'images';
        $file->move($destination,$file->getClientOriginalName());
        $collect_products['p_image']= $name;
        //image two
        $file1 = $request->file('pd_img1');
        $name1 =$request->file('pd_img1')->getClientOriginalName();
        $destination1 = 'images';
        $file1->move($destination1,$file1->getClientOriginalName());
        $collect_products['pd_img1']= $name1;
        //image three
        $file2 = $request->file('pd_img2');
        $name2 =$request->file('pd_img2')->getClientOriginalName();
        $destination2 = 'images';
        $file2->move($destination2,$file2->getClientOriginalName());
        $collect_products['pd_img2']= $name2;
        //image four
        $file3 = $request->file('pd_img3');
        $name3 =$request->file('pd_img3')->getClientOriginalName();
        $destination3 = 'images';
        $file3->move($destination3,$file3->getClientOriginalName());
        $collect_products['pd_img3']= $name3;
        //image five
        $file4 = $request->file('pd_img4');
        $name4 =$request->file('pd_img4')->getClientOriginalName();
        $destination4 = 'images';
        $file4->move($destination4,$file4->getClientOriginalName());
        $collect_products['pd_img4']= $name4;
        
        // dd($collect_products);
        $save_to_db = HektoProduct::create($collect_products);

        if ($save_to_db){
          return response()->json(
            [
              'status' => 'success',
              'data' =>$save_to_db,
              'message'=> 'A new product has been Added'
            ]
            );
        }
        }
        return view('Add_Product');
    }
    public function getProducts (Request $req)
    {
      $all_products = HektoProduct::all();


      return response()->json([
        'products' =>$all_products
      ]);
    }
    
    public function getStatus(Request $req){
      $featured = HektoProduct::where( 'status', 'featured')->get();
      $top = HektoProduct::where( 'status', 'top')->get();
      $trending = HektoProduct::where( 'status', 'trending')->get();
      $latest = HektoProduct::where( 'status', 'latest')->get();
      $executive = HektoProduct::where( 'status', 'executive')->get();
  
      return response()->json([
        'featured' =>$featured,
        'top' =>$top,
        'trending' =>$trending,
        'latest' =>$latest,
        'executive' =>$executive
      ]);

    }
  public function singleProduct($id){
      $product = HektoProduct::find($id);
          return response()->json(['product'=> $product]);
  }
}
