<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function shoMessage()
   {
       return 'You have permission to access this portion';
   }
}
