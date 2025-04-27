<?php

namespace App\Http\Controllers\Enduser;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class StudentDashboardController extends Controller
{
    //
    public function index(): View
    {
        return view("enduser.students.dashboard");
    }
}
