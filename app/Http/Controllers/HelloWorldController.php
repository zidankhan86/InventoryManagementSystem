<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function firstCode(){
        return  ('Hello World');
    }


    public function hello(Request $request):string
    {
        $name =$request->name;
        $age =$request->age;
return "My Name Is= ${name} and my age is ${age} ";
    }
}



