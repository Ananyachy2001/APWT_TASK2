<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function registration(){
        return view("registration");
    }

    public function register(Request $request){
        $output = "<h1>Submitted</h1>";
        $output.= "Userame:".$request->username;
        $output.= "<br>Password:".$request->password;
        $output.= "<br>Profession:".$request->profession;
        $output.= "<br>Address:".$request->address;
        return $output;

    }
}
