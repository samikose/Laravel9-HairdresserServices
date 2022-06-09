<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\RoleUser;
use App\Models\Service;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    //
    public function index()
    {
        $page='home';
        $setting= Setting::first();
        $servicelist1=Service::limit(6)->get();
        $images = DB::table('images')->where('service_id', 14)->get();
        return view('home.index',[
            'page'=>$page,
            'setting'=>$setting,
            'servicelist1'=>$servicelist1,
            'images' => $images,
        ]);
    }

    public function about()
    {
        $setting= Setting::first();
        return view('home.about',[
            'setting'=>$setting
        ]);
    }

    public function references()
    {
        $setting= Setting::first();
        return view('home.references',[
            'setting'=>$setting
        ]);
    }

    public function contact()
    {
        $setting= Setting::first();
        return view('home.contact',[
            'setting'=>$setting
        ]);
    }

    public function appointment()
    {
        $setting= Setting::first();
        $servicelist1=Service::limit(6)->get();
        $userlist1=User::limit(6)->get();
        return view('home.appointment',[
            'setting'=>$setting,
            'servicelist1'=>$servicelist1,
            'userlist1'=>$userlist1,
        ]);
    }

    public function faq()
    {
        $setting= Faq::first();
        $datalist= Faq::all();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);
    }

    public function storemessage(Request $request)
    {
        //dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent, Thank You.');
    }

    public function storeappointment(Request $request)
    {
        //dd($request);
        $data = new Appointment();
        $data->user_id = Auth::id();
        $data->service_id = $request->input('service_id');
        $data->worker_id = $request->input('worker_id');
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->note = $request->input('note');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('appointment')->with('success','Your appointment has been created, Thank You.');
    }

    public function storecomment(Request $request)
    {
         // dd($request);
        $data = new Comment();
        $data->user_id = Auth::id(); //Logged in user id
        $data->service_id = $request->input('service_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('servicedetail',['id'=>$request->input('service_id')])->with('success','Your comment has been sent, Thank You.');
    }

    public function service(){
        $page='home';
        $categorylist1=Category::limit(6)->get();
        $servicelist1=Service::limit(20)->get();
        $sliderdata=Service::limit(4)->get();
        $setting= Setting::first();
        return view('home.service',[
            'categorylist1'=>$categorylist1,
            'servicelist1'=>$servicelist1,
            'sliderdata'=>$sliderdata,
            'page'=>$page,
            'setting'=>$setting
        ]);

    }

    public function servicedetail($id)
    {
        $page='home';
        $data=Service::find($id);
        $reviews = Comment::where('service_id',$id)->where('status','True')->get();
        $setting= Setting::first();
        return view('home.servicedetail',[
            'data'=>$data,
            'page'=>$page,
            'setting'=>$setting,
            'reviews'=>$reviews
        ]);
    }


    public function categoryservices($id){

        $category= Category::find($id);
        $services=DB::table('services')->where('category_id',$id)->get();
        $setting= Setting::first();
        return view('home.categoryservices',[
           'category'=>$category,
            'services'=>$services,
            'setting'=>$setting,
        ]);
    }

    public function test(){
        return view('home.test');
    }

    public function param($fname,$lname){
       // echo "Parameter 1:", $id;
        //echo "<br>Parameter 2:", $number;
        //echo "<br>Sum Parameters :",$id+$number;
        return view('home.test2',
        [
            'fname' => $fname,
            'lname'=>$lname
        ]);
    }

    public function save(Request $request)
    {
        //echo "Save function<br>";
        //echo "Name :",$_REQUEST["fname"];
        //echo "Surname :",$_REQUEST["lname"];
        return view('home.test2',
            [
                'fname' => $_REQUEST["fname"],
                'lname'=>$_REQUEST["lname"]
            ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        // dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}
