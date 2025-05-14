<?php

namespace App\Http\Controllers\Enduser\Student;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Enduser\Student\ProfileRequest;
use App\Http\Requests\Enduser\Student\UpdatePasswordRequest;
use App\Http\Requests\UpdateSocialLinksRequest;

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
    public function updatePassword(UpdatePasswordRequest $request, User $user): RedirectResponse
    {
        // dd($user);
        $newPassword = Hash::make($request->validated(['password']));
        $user->update([
            'password' => $newPassword,
        ]);
        return to_route('student.profile');
    }
    public function updateSocialLinks(UpdateSocialLinksRequest $request, User $user): RedirectResponse
    {
        $user->update($request->validated());
        return to_route('student.profile');
    }
}
