<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function addUser(Request $request){
        // echo "add user function called";
        echo "username is  $request->name";
        echo "<br>";
        echo "your email is $request->email";
        echo "<br>";
        echo "your pass is $request->pass";
        echo "<br>";
        // return $request;
    }
}
