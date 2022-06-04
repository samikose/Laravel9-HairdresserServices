<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Service;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
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
        return view('home.index',[
            'page'=>$page,
            'setting'=>$setting
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

    public function service(){
        $page='home';
        $categorylist1=Category::limit(6)->get();
        $servicelist1=Service::limit(6)->get();
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
        $setting= Setting::first();
        return view('home.servicedetail',[
            'data'=>$data,
            'page'=>$page,
            'setting'=>$setting
        ]);
    }


    public function categoryservices($id){

        echo "födghvfdöhfg";
        exit();
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

}
