<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\HektoOrder;
use App\Models\HektoProduct;
use App\Models\HektoShipUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HektoController extends Controller
{
  //
  public function AddProduct(Request $request)
  {
    if ($request->isMethod('post')) {

      // dd($req->all());

      $collect_products = $request->all();
      //image one
      $file = $request->file('p_image');
      $name = $request->file('p_image')->getClientOriginalName();
      $destination = 'images';
      $file->move($destination, $file->getClientOriginalName());
      $collect_products['p_image'] = $name;
      //image two
      $file1 = $request->file('pd_img1');
      $name1 = $request->file('pd_img1')->getClientOriginalName();
      $destination1 = 'images';
      $file1->move($destination1, $file1->getClientOriginalName());
      $collect_products['pd_img1'] = $name1;
      //image three
      $file2 = $request->file('pd_img2');
      $name2 = $request->file('pd_img2')->getClientOriginalName();
      $destination2 = 'images';
      $file2->move($destination2, $file2->getClientOriginalName());
      $collect_products['pd_img2'] = $name2;
      //image four
      $file3 = $request->file('pd_img3');
      $name3 = $request->file('pd_img3')->getClientOriginalName();
      $destination3 = 'images';
      $file3->move($destination3, $file3->getClientOriginalName());
      $collect_products['pd_img3'] = $name3;
      //image five
      $file4 = $request->file('pd_img4');
      $name4 = $request->file('pd_img4')->getClientOriginalName();
      $destination4 = 'images';
      $file4->move($destination4, $file4->getClientOriginalName());
      $collect_products['pd_img4'] = $name4;

      // dd($collect_products);
      $save_to_db = HektoProduct::create($collect_products);

      if ($save_to_db) {
        return response()->json(
          [
            'status' => 'success',
            'data' => $save_to_db,
            'message' => 'A new product has been Added'
          ]
        );
      }
    }
    return view('Add_Product');
  }
  public function getProducts(Request $req)
  {
    $all_products = HektoProduct::all();


    return response()->json([
      'products' => $all_products
    ]);
  }

  // getting users shipping details
  public function getUser($user_id)
  {
    $a_user = HektoShipUser::find($user_id);


    return response()->json([
      'status' => 200,
      'a_user' => $a_user,
      'message' => 'A user shipping details has been retrieved'
    ]);
  }

  public function getStatus(Request $req)
  {
    $featured = HektoProduct::where('status', 'featured')->get();
    $top = HektoProduct::where('status', 'top')->get();
    $trending = HektoProduct::where('status', 'trending')->get();
    $latest = HektoProduct::where('status', 'latest')->get();
    $executive = HektoProduct::where('status', 'executive')->get();

    return response()->json([
      'featured' => $featured,
      'top' => $top,
      'trending' => $trending,
      'latest' => $latest,
      'executive' => $executive
    ]);
  }
  public function singleProduct($id)
  {
    $product = HektoProduct::find($id);
    return response()->json(['product' => $product]);
  }

  public  function addShip(Request $req)
  {
    $save_to_db = HektoShipUser::create($req->all());

    if ($save_to_db) {
      return response()->json(
        [
          'status' => 'success',
          'data' => $save_to_db,
          'message' => 'A new worker has been Added'
        ]
      );
    }
  }
  public  function register(Request $req)
  {
    $data2 = $req->all();
    // $data2['password'] = $req->password;

    $data2['password'] = Hash::make($data2['password']);
    $save_to_db = User::create($data2);

    if ($save_to_db) {
      return response()->json(
        [
          'status' => 'success',
          'data' => $save_to_db,
          'message' => 'A new user has been registered'
        ]
      );
    }
  }
  public  function saveOrder(Request $req)
  {
    // $data3 = $req->all();
    $data3['userId'] = $req->userId;
    $data3['userName'] = $req->userName;
    $data3['userEmail'] = $req->userEmail;
    $data3['paymentReference'] = $req->paymentReference;
    $data3['paymentTxId'] = $req->paymentTxId;
    $data3['paymentStatus'] = $req->paymentStatus;
    $data3['amount'] = $req->amount;

    $save_to_db = HektoOrder::create($data3);

    if ($save_to_db) {
      return response()->json(
        [
          'status' => 'success',
          'data' => $save_to_db,
          'message' => 'A new order has been made'
        ]
      );
    }
  }

  public function signin(Request $request)
  {

    //validate the request
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required',
    ]);

    //check if the user exists
    $user = User::where('email', $request->email)->first();

    if (!$user) {
      return response()->json([
        'status' => 'error',
        'message' => 'User does not exist!'
      ], 401);
    }

    //check if the password is correct
    if (!Hash::check($request->password, $user->password)) {
      return response()->json([
        'status' => 'error',
        'message' => 'Password is incorrect!'
      ], 401);
    }

    //generate the token
    // $token = $user->createToken($user->name)->accessToken;

    //return the response
    return response()->json([
      'status' => 'success',
      'message' => 'Successfully logged in!',
      'data' => $user,
      // 'token' => $token

    ], 200);
  }


  // //handle the user profile api request
  // public function profile(Request $request)
  // {
  //     //if 302 is returned, the user is not logged in

  //         return response()->json([
  //             'status' => 'success',
  //             'message' => 'Successfully got the user profile!',
  //             'data' => auth()->user()
  //         ], 200);


  // }

  // //handle the user logout api request
  // public function logout(Request $request)
  // {
  //     $token = $request->user()->token();
  //     $token->revoke();

  //     return response()->json([
  //         'message' => 'Successfully logged out!'
  //     ], 200);
  // }




}
