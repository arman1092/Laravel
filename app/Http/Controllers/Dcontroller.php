<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dcontroller extends Controller
{
    public function index(){
        return view("index");
    }
    public function register(Request $req){
      $req->validate(
        [
        'name'=>'required',
        'email'=>'required | email',
        'pass'=>'pass'
        ]
      );
    }
}
