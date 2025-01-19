<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentLoginRequest;
use App\Http\Requests\Student\StudentRegisterRequest;
use App\Models\Student;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class StudentAuthController extends Controller
{
    public function registerPage()
    {
        return view('studentAuth.register');
    }
    public function loginPage()
    {
        return view('studentAuth.login');
    }
    public function studentRegister(StudentRegisterRequest $request)
    {
        $student = Student::create($request->validated());
        event(new Registered($student));

        Auth::guard('student')->login($student, true);

        Alert::success('Student added successfully');
        return redirect(route('student.dashboard', absolute: false));
    }
    public function studentLogin(Request $request): RedirectResponse|string
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    if (Auth::guard('student')->attempt(
        ['email' => $request->email, 'password' => $request->password],
        $request->get('remember')
    )) {
        return redirect(route('student.dashboard'));
    }

    return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
}


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('studentLogin')->with('success', 'You have been logged out!');
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $student = auth('student')->user();

        // Update the password
        $student->update([
            'password' => $validated['password'],
        ]);

        return back()->with('status', 'password-updated');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $student = Auth::guard('student')->user();

        if ($student) {
            $student->delete();
    
            Auth::guard('student')->logout();
    
            $request->session()->invalidate();
            $request->session()->regenerateToken();
    
            return redirect('/')->with('status', 'Profile deleted successfully');
        }
    }

}
