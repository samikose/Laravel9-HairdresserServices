<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
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
