<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function accessSessionData(Request $request)
    {
        if ($request->session()->has('data')) {
            echo $request->session()->get('data');
        }else {
            echo "No session data found";
        }
    }

    public function storeSessionData(Request $request)
    {
        $request->session()->put('data','Laravel Lover');
        echo "Data has been saved in session";
    }

    public function removeSessionData(Request $request)
    {
        $request->session()->forget('data');
        echo "Data has been removed successfully";
    }
    
}
