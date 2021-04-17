<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class UriController extends Controller
{
    public function retriveUri()
    {
        /* $path = $request->path();
        echo 'Path method: '.$path;
        echo '<br>';

        $pattern = $request->is('foo/*');
        echo 'Is method: '.$pattern;
        echo '<br>';

        $url = $request->url();
        echo 'URL method: '.$url;
        echo '<br>'; */
        return \view('register');
    }
    public function showData(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->username = $request->username;
        $student->password = $request->password;
        return $student;
    }
}
