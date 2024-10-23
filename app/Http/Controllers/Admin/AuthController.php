<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        if ($request->getMethod() == "POST") {
            // dd($request->all());
            $data = $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 1], $request->filled(('me')))) {
                return redirect()->route('admin.dashboard.index')->with('message', "Login Sucessfull");
            } else {
                return redirect()->back()
                    ->with('error', 'Email and password Combination Wrong.')
                    ->withInput(['email']);
            }
        } else {
            return view('admin.auth.login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token for security
        return redirect()->route('admin.login')->with('message', 'Logged out successfully.');
    }

    public function changePassword(Request $request)
    {
        if ($request->getMethod() == "post") {
            // Validate the input
            $request->validate([
                'current_password' => 'required', // Old password is required
                'password' => 'required|min:8|confirmed', // Ensure password is confirmed
            ]);

            // Get the currently authenticated user
            $user = Auth::user();
            if (!Hash::check($request->current_password, $user->password)) {
                return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
            }
            // Update the user's password
            $user->password = bcrypt($request->password);
            $user->save();

            // Optional: Logout the user after password change for security
            // Auth::logout();

            // Regenerate the session to prevent session fixation attacks
            $request->session()->regenerateToken();

            return redirect()->back()->with('message', 'Password changed successfully.');
        } else {
            return view('admin.auth.changePassword');
        }
    }


    public function email(Request $request)
    {
        $free = 1;
        if ($request->filled('emp_id')) {
            $employee = Employee::select('email')->where('id', $request->emp_id)->first();
            if ($employee->email == $request->email) {
                $free = 0;
            } else {
                $free = DB::table('users')->where('email', $request->email)->count();
            }
        } else {
            $free = DB::table('users')->where('email', $request->email)->count();
        }
        return response()->json(['status' => $free]);
    }
}
