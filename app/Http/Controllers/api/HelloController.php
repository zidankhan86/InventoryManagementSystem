<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello(Request $request):string
    {
        $name =$request->name;

return "My Name Is ${name}  ";
    }
}
