<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function firstCode(){
        return  ('Hello World');
    }


    public function hello(Request $request)
    {
        $name = $request->input('name');

        
    }
}



