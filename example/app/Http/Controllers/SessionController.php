<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class SessionController extends Controller
{
    //

    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {

        $validated_data = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']

        ]);
        // attempt to login
        if (!Auth::attempt($validated_data)) {
            throw ValidationException::withMessages([
                'email' => 'incorrect credential'
            ]);
        } else {
            Auth::attempt($validated_data);
        }

        // regenerating session token again
        request()->session()->regenerate();

        return redirect('/jobs')->with('success', 'login successfully.');
    }

    public function destroy(Request $request)
    {
        Auth::logout(); // Logs out the user
        $request->session()->invalidate(); // Invalidates the session
        $request->session()->regenerateToken(); // Prevents CSRF attacks

        return redirect('/auth/login'); // Redirects to login page
    }

}
