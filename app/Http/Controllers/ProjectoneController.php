<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\blog;
use App\Models\calculator;
use App\Models\contact;
use App\Models\order;
use App\Models\qoute;
use App\Models\User;
use App\Models\user_admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

use function PHPSTORM_META\type;

class ProjectoneController extends Controller
{

    public function home()
    {

        return view('home');
    }
    public function about()
    {

        return view('about');
    }

    public function get_qoute(Request $request)
    {

        if ($request->isMethod('POST'))
        {

            $request->validate(
                [
                    'name' => 'required',
                    'freight' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'distance' => 'required',
                    'weight' => 'required',
                    'pickup' => 'required',
                    'dropoff' => 'required'
                ] );
               $all_data = $request->all();
               $all_data['trackingID'] =  uniqid();



               return redirect('quote_estimate',compact($all_data));

        }

        return view('get_qoute');
    }

    public function quote_estimate(Request $request)
    {

        $all_data = $request->all();
               $all_data['trackingID'] =  uniqid();
        $calc_values = calculator::all();


        return view('quote_estimate',compact('all_data','calc_values'));
    }

    public function tracker(Request $request)
    {

        if($request->isMethod('post')){

            $estimate_details = $request->all();
            // adding a predefined status of pending
            $status = 'PENDING';
            // generate tracking id
            $trackingID =  uniqid();
            //  adding tracking id to array of estimate details
            $estimate_details['trackingID']= $trackingID;
            //  adding tracking id to array of estimate details
            $estimate_details['status']= $status;
            //save all orders details to the database
            $save_to_db = order::create($estimate_details);

            if($save_to_db){

                return view('tracker',compact('trackingID'));
            }else{
                return redirect('quote_estimate');
            }




        }


        return view('tracker');
    }
    public function track_parcel(Request $request)
    {

            if ($request->isMethod('post')) {

               $trackingID=$request->trackingID;
                $checkID = order::where('trackingID',  $trackingID)->count();

                if ($checkID > 0) {
                    $checkIDs = order::where('trackingID',  $trackingID)->first();
                    // dd($checkIDs);
                    return view('checkparcel_status',compact('checkIDs'));
                }

            }
            return view ('track_parcel');

    }

    public function checkparcel_status(Request $request){

          return view('checkparcel_status');
    }
    public function checkparcel_status1(Request $request){

          return view('checkparcel_status1');
    }

    public function blog_details()
    {

        return view('blog_details');
    }
    public function contact(Request $request)
    {

        if ($request->isMethod('post')) {

            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'title' => 'required',
                'message' => 'required'
            ]);
            $collect = $request->all();
            $save_to_db = contact::create($collect);
            if ($save_to_db) {
                return back()->with('success_msg', 'contact succesfully saved');
            }
        }
        return view('contact');
    }

    //Admin controller

    public function dashboard()
    {

        return view('dashboard');
    }
    public function check_contact(Request $request, $id = null)

    {

        $a_contact['id'] = "";
        $a_contact['name'] = "";
        $a_contact['email'] = "";
        $a_contact['phone'] = "";
        $a_contact['title'] = "";
        $a_contact['message'] = "";

        $a_contact = (object) $a_contact;



        $collecting_contacts = contact::paginate(5); // take contact as an array
        //dd($id);
        if ($id) {
            $a_contact = DB::table('contacts')->find($id); //array
            $a_contact = (object) $a_contact;
        }
        return view('check_contact', compact('collecting_contacts', 'a_contact'));
    }
    public function check_order(Request $request)

    {

        $orders = order::paginate(6);
        return view('check_order', compact('orders'));
    }

    public function viewmore(Request $request)

    {
        if($request->isMethod('POST')){


             order::where('id', $request->id)->update(['status'=>$request->status]);



        }


        $orders = order::find($request->id);
        return view('checkorder_more', compact('orders'));
    }

    public function blog(Request $request)
    {
        $collecting_blogs = blog::all();

        return view('blog',compact('collecting_blogs'));

}

    public function add_blog(Request $request)
    {
        if ($request->isMethod('post')) {

            $request->validate([
                'image' => 'required',
                'title' => 'required',
                'author' => 'required',
                'content' => 'required'


            ]);

            $collect_blogs = $request->all();
            $name =$request->file('image')->getClientOriginalName();
            $file = $request->file('image');
            $destination = 'images';
            $file->move($destination,$file->getClientOriginalName());
            $collect_blogs['image']= $name;
            $save_to_db = blog::create($collect_blogs);

            if ($save_to_db) {


                return back()->with('success_msg', 'blog succesfully saved');
            }
            return view ('add_blog')->with('error','error');
        }


        return view('add_blog');
    }
    public function about_us(Request $request)
    {
        $collecting_abouts = about::all();

        return view('about',compact('collecting_abouts'));

}

    public function add_about(Request $request)

    {
        if ($request->isMethod('post')) {
            // dd($request);

            $request->validate([
                'image' => 'required',
                'title' => 'required',
                'about' => 'required',
                'vision' => 'required',
                'mission' => 'required'


            ]);

            $collect_abouts = $request->all();
            $name =$request->file('image')->getClientOriginalName();
            $file = $request->file('image');
            $destination = 'images';
            $file->move($destination,$name);
            $collect_blogs['image']= $name;
            // $save_to_db = about::create($collect_abouts);
            $update = about::where('id','2')->update(['image'=>$name,'title'=>$request->title,
            'about'=>$request->about,'mission'=>$request->mission,'vision'=>$request->vision]);
            // $file->getClientOriginalName()
            if ($update) {


                return back()->with('success_msg', 'about succesfully updated');
            }
            return view ('add_blog')->with('error','error');
        }

        $abouts = about::find(2);
        // dd($abouts->mission);
        return view('add_about', compact("abouts"));
    }



    public function admin_calculator(Request $request)
    {

        if ($request->isMethod('post')) {

            $request->validate([
                'roadfrieght' => 'required',
                'airfrieght' => 'required',
                'shipfreight' => 'required',
                'distance' => 'required',
                'weight' => 'required'


            ]);
            $collect_calc = $request->all();
            // dd($updcollect_calcate);
            $update = calculator::where('id','1')->update(['roadfrieght'=>$request->roadfrieght,
            'airfrieght'=>$request->airfrieght,'shipfreight'=>$request->shipfreight,'distance'=>$request->distance,
            'weight'=>$request->weight]);
            // dd($update);
            if($update){
                return back()->with('success_msg', 'calculator succesfully edited');
            }
            }
            $collecting_calcs = calculator::all()->toArray();
        //  $a_contact = DB::table('calculators')->find(); //array

            return view('admin_calculator', compact('collecting_calcs'));


    }




    public function admin_settings()
    {

        return view('admin_settings');
    }
    public function admin_signup(Request $request)
    {
        if ($request->isMethod('post')) {

            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                //'retypepassword' => 'required',


            ]);

            // if ($request->password !== $request->retypepassword) {
            //     return back()->with('error', 'password doesnt match');;
            // }

            // $data2['coupon'] = uniqid();
            $data2['name'] = $request->name;
            $data2['email'] = $request->email;
            $data2['password'] = $request->password;
           // $data2['retypepassword'] = $request->retypepassword;
            // $data2['status'] = 'pending';
            $data2['password'] = Hash::make($request->password);


            $save_to_db = User::create($data2);

            if ($save_to_db) {
                //Mail::to($request->email)->send(new Verification2($data2));

                return redirect('/admin_signin');
            } else {
                return back()->with('error', 'wrong coupon');
            }
        }

        return view('admin_signup');
    }
    public function admin_signin(Request $request)
    {
        if(session()->has('admin_signin')){
            return redirect('dashboard');
        }

        if ($request->isMethod('post')) {

             $checkemail = $request->validate([
                'password' => 'required',
                'email' => 'required'
            ]);



            if (Auth::attempt($checkemail) > 0) {
                //we create a session for midlleware auth
               $request->session()->put('admin_signin',$request->email);
               // $checkverification = user_admin::where(['status' => 'verified'])->count();
                // dd($checkemail);
                return redirect('/dashboard');
                //if ($checkverification > 0) {
                //    return redirect('/dashboard');
                //}
            } else {
                return back()->with('error', 'wrong email or password Entered');
            }
        }
        return view('admin_signin');

    }
    public function admin_logout()
    {

        return view('admin_logout');
    }
}
