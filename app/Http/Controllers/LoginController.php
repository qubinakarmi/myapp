<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:logins,name',
            'email' => 'required|email|unique:logins,email',
            'password' => [
                'required',
                'string',
                Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
            ],
            'confirmpassword' => 'required|same:password'
        ], [
            'confirmpassword.same' => 'Passwords do not match.',
            'password.min' => 'Password must be at least 8 characters.',
            'name.unique' => 'Username already exists',
        ]);

        $user = new Login();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // ✅ Secure password

        if ($user->save()) {
            return redirect('login'); // ✅ Registration successful
        } else {
            return back()->with('error', 'Something went wrong while saving the user.');
        }
    }




// Show login form
public function showLoginForm()
{
    return view('login'); // loads the login.blade.php file
}

   

    // The user is being remembered...
 public function login(Request $request)
{
    // Validate inputs
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    // Try to log in with email & password
   
    if (Auth::attempt($credentials)) {
       return view('home');
    }

    // If login fails
    return back()->withErrors([
        'email' => 'Invalid credentials, please try again.',
    ])->onlyInput('email');
}

// Logout
public function logout(Request $request)
{
    Auth::logout(); // remove user from session
    $request->session()->invalidate(); // clear session
    $request->session()->regenerateToken(); // regenerate CSRF token

    return redirect('/login'); // back to login page
}




}
