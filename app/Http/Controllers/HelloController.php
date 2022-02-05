<?php

namespace App\Http\Controllers;
use App\Models\Info;

use Illuminate\Http\Request;

class HelloController extends Controller
{



    public function index()
    {
        return view('hello');
    }


    public function getInfo(){

        return Info::select('id','name','price')->get();
    }

}
