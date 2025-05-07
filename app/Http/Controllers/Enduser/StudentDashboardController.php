<?php

namespace App\Http\Controllers\Enduser;

use App\Models\User;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Mail\InstructorRequestApprovedMail;
use App\Mail\InstructorRequestRejectedMail;

class StudentDashboardController extends Controller
{
    //
    use FileUpload;
    public function index(): View
    {
        return view("enduser.students.dashboard");
    }

    public function becomeInstructor(): View
    {
        return view('enduser.students.become-instructor');
    }
    public function becomeInstructorDoc(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'document' => ['required', 'mimes:png,jpg,pdf,doc', 'max:12000'],
        ]);
        $filePath =  $this->uploadFile($request->file('document'));
        $user->update([
            'approve_status' => 'pending',
            'document' => $filePath
        ]);

        return to_route('student.dashboard');
    }
}
