<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function Index($id){
$date = [(
    ['name'=>'DonalTramp','age'=>'75']
    )];
    return view ('home',['datakeys'=>$date]);
   }
}
