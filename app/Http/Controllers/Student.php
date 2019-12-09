<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    public function show(){
        $sum= 1+2;
       return view('welcome',compact('sum'));
     // return view('welcome','$sum');
    }
}