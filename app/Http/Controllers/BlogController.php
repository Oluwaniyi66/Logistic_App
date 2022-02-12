<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function blog(Request $request)
    {
        $collecting_blogs = blog::all();

        return response()->json($collecting_blogs);

}

public function single_blog($id){
        $collecting_blogs = blog::find($id);
            return response()->json($collecting_blogs);
    }

    public function editBlog(Request $request)
    {
        if($request->isMethod('PUT')){
                $request->validate([
                    "author"=>"required",
                    "title"=>"required",
                    "content"=>"required",
                    // "id"=>"required"

                ]);

             $create = blog::where('id',$request->id)->update(['author' => $request->author,
             'title'=>$request->title,'content'=>$request->content]);
             if($create){
                 return response()->json(['msg'=>'Blog updated successfully','data'=>$create]);
             }

        }

        $blogContents =blog::all();
        return view("add_blog", compact('blogContents'));

    }
    public function createBlog(Request $request)
    {
        if($request->isMethod('POST')){
                $request->validate([
                    "author"=>"required",
                    "title"=>"required",
                    "content"=>"required",


                ]);

             $create = blog::create($request->all());
             if($create){
                 return response()->json(['msg'=>'Blog saved successfully','data'=>$create]);
             }

        }

        $blogContents =blog::all();
        // return view("add_blog", compact('blogContents'));

    }

    public function deleteBlog(Request $request, $id)
    {
        if($request->isMethod('POST')){
                $request->validate([

                    "id"=>"required"


                ]);

              blog::where('id',$id)->delete();
              $blogContents = blog::all();

                 return response()->json(['msg'=>'Blog post deleted','data'=>$blogContents]);


        }




    }
    public function get_authors()
    {


        $authors =blog::all();
        return response()->json(['msg'=>'authors gotten','authors'=>$authors]);
    }


}



