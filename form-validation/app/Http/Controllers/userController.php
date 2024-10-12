<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
   function addUser(Request $request){
    $request->validate([
      'name'=>'required | min:3 | max:10' ,
      'email'=>'required | email',
      'city'=>'required | max:20',
      'skills'=>'required',
    ]);
    return $request;
   }
}
