<?php

namespace App\Http\Controllers\Enduser\Instructor;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Enduser\Student\ProfileRequest;
use App\Http\Requests\Enduser\Student\UpdatePasswordRequest;
use App\Http\Requests\UpdateSocialLinksRequest;
use App\Traits\FileUpload;

class ProfileController extends Controller
{
    //
    use FileUpload;
    public function index(): View
    {
        return view('enduser.instructors.profile.index');
    }
    public function edit(User $user): View
    {
        return view('enduser.instructors.profile.edit');
    }
    public function update(ProfileRequest $request, User $user): RedirectResponse
    {
        // dd($request->validated());
        if ($request->hasFile('avatar')) {
            $avatarPath = $this->uploadFile($request->file('avatar'), 'uploads/instructors');
        }
        $data = $request->validated();
        if ($request->hasFile('avatar')) {
            $data['image'] =  $avatarPath;
        }
        $user->update($data);
        return to_route('instructor.profile');
    }
    public function updatePassword(UpdatePasswordRequest $request, User $user): RedirectResponse
    {
        // dd($user);
        $newPassword = Hash::make($request->validated(['password']));
        $user->update([
            'password' => $newPassword,
        ]);
        return to_route('instructor.profile');
    }
    public function updateSocialLinks(UpdateSocialLinksRequest $request, User $user): RedirectResponse
    {
        $user->update($request->validated());
        return to_route('instructor.profile');
    }
}
