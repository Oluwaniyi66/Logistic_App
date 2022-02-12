<?php

namespace App\Http\Controllers;
use App\Models\CrudUser;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    // this is for creating worker from a react project called crud-form

  public  function addUser (Request $req)
  {
          $save_to_db = CrudUser::create($req->all());

          if ($save_to_db){
            return response()->json(
              [
                'status' => 'success',
                'data' =>$save_to_db,
                'message'=> 'A new worker has been Added'
              ]
              );
          }


            
    }


    public function getUsers (Request $req)
    {
      $all_users = CrudUser::all();


      return response()->json([
        'users' =>$all_users
      ]);
    }
}
