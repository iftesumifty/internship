<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirects()
    {
        $roll_id=Auth::user()->roll_id;
        if($roll_id=='1')
        {
         return view('backend');
        }
 
        if($roll_id=='2')
        {
        return view('index');

 }
    }
}
