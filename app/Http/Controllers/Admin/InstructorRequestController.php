<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Mail\InstructorRequestApprovedMail;
use App\Mail\InstructorRequestRejectedMail;

class InstructorRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $instructorRequests = User::where('approve_status', '!=', 'approved')
            ->where('document', '!=', null)
            ->get();
        return view("admin.instructor-request.index", ['instructorRequests' => $instructorRequests]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $instructor_request): RedirectResponse
    {
        //
        $request->validate(['status' => ['required', 'in:approved,rejected,pending']]);
        $instructor_request->approve_status = $request->status;
        $request->status == 'approved' ? $instructor_request->role = 'instructor' : "";
        $instructor_request->save();
        if ($instructor_request->approve_status == 'approved') {
            if (config('mail_queue.is_queue')) {
                Mail::to($instructor_request->email)->queue(new InstructorRequestApprovedMail());
            } else {
                Mail::to($instructor_request->email)->send(new InstructorRequestApprovedMail());
            }
        } elseif ($instructor_request->approve_status == 'rejected') {
            if (config('mail_queue.is_queue')) {
                Mail::to($instructor_request->email)->queue(new InstructorRequestRejectedMail());
            } else {
                Mail::to($instructor_request->email)->send(new InstructorRequestRejectedMail());
            }
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function download(User $user)
    {
        return response()->download(public_path($user->document));
    }
}
