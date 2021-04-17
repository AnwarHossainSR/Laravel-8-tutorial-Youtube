<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function flashMessage(Request $request)
    {
        $data = $request->username;
        //$request->session()->flash('data',$data);
        return \redirect('/')->with('data',$data);
    }   
}