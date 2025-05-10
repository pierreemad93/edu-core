<?php

namespace App\Http\Controllers\Enduser\Student;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Enduser\Student\ProfileRequest;
use Illuminate\Http\RedirectResponse;

class ProfileController extends Controller
{
    //
    public function index(): View
    {
        return view('enduser.students.profile.index');
    }
    public function edit(User $user): View
    {
        return view('enduser.students.profile.edit');
    }
    public function update(ProfileRequest $request, User $user): RedirectResponse
    {
        $user->update($request->validated());
        return to_route('student.profile');
    }
}
