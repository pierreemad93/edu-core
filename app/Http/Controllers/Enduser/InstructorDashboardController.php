<?php

namespace App\Http\Controllers\Enduser;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class InstructorDashboardController extends Controller
{
    //
    public function index():View
    {
        return view("instructors.dashboard");
    }
}
