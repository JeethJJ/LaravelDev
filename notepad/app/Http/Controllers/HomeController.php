<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function list(){
        $names=["Jihan","Jeeth","Jafeer"];
        return view("contact",["contacts"=>$names]);
    }
}
