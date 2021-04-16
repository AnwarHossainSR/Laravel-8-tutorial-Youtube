<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function fetchData()
    {
        $teachers = Teacher::all();
        return $teachers;
    }
}
