<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{

/* public function redirect(){

    if (auth::id()){

        if (Auth::user()->Usertype=='admin'){

            return view('admin.home');

        }elseif ((Auth::user()->Usertype=='user')){
                return view('admin.user');

        }elseif(Auth::user()->Usertype=='client')
        {
            return view('admin.client');

        }



    }else{
        return redirect()->back();
    }



}
 */


 public function index1 (){

    return view ('admin.home');
 }


 public function index2 (){

    return view ('admin.client');
 }

 public function index3 (){

    return view ('admin.user');
 }


}

