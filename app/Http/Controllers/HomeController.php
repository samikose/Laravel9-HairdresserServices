<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        echo "Index Function";
    }

    public function test(){
        return view('home.test');
    }

    public function param($id,$number){
       // echo "Parameter 1:", $id;
        //echo "<br>Parameter 2:", $number;
        //echo "<br>Sum Parameters :",$id+$number;
        return view('home.test2',
        [
            'id' => $id,
            'number'=>$number
        ]);
    }
}
