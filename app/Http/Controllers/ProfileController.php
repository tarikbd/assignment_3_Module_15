<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id){
        $name = "Donal Trump";
        $age = "75";

        $data = ["name" => "Donal Trump", "age" => "75"];
        
        foreach ($data as $key => $value) {
            echo "$key : $value<br>";
        }   
        
    }

    public function setCookie(Request $request){
        $cookie_name = 'access_token';
        $value = '123-XYZ';        
        $minutes = 1;        
        $path = '/profile/{id}';       
        $domain = $_SERVER['SERVER_NAME'];        
        $secure = false;        
        $httpOnly = true;        

        return response()->json(['status'=>'200'])->withCookie(cookie($cookie_name, $value, $minutes, $path, $domain, $secure, $httpOnly));

    }    
}


