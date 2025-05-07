<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\FileUpload;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    use FileUpload;
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'document' => $request->type === 'instructor' ? ['required', 'mimes:png,jpg,pdf,doc', 'max:12000'] : ['nullable'],
        ]);
        $status = $request->type == 'student' ? 'approved' : 'pending';
        $filePath = $request->type === 'instructor' ? $this->uploadFile($request->file('document')) : null;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->type,
            'approve_status' => $status,
            'document' => $filePath
        ]);

        event(new Registered($user));

        Auth::login($user);
        if ($request->type == 'student') {

            return redirect(route('student.dashboard', absolute: false));
        } else {

            return redirect(route('instructor.dashboard', absolute: false));
        }
    }
}
