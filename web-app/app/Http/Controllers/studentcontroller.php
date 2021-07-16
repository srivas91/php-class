<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentcontroller extends Controller
{
   function  hello()
   {
       return "this is my page";
   }
   function login()
   {
       return view('login');
   }
}
