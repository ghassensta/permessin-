<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{

public function redirect(){

    if (auth::id()){

        if (Auth::user()->Usertype=='admin'){

                return view('admin.home');
        }else{
                return view('dashboard');
        }



    }else{
        return redirect()->back();
    }



}

}

