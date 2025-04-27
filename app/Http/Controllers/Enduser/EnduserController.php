<?php

namespace App\Http\Controllers\Enduser;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EnduserController extends Controller
{
    //
    public function index():View
    {
        return view("enduser.pages.home");
    }
}
