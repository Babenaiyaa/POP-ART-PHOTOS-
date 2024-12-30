<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   

    // Show registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle registration logic
    public function register(Request $request)
    {
        // Validate registration data
        $this->validator($request->all())->validate();

        // Create the user
        $user = $this->create($request->all());

        // Log the user in after registration
        Auth::login($user);

        // Redirect to the home page after successful registration
        return redirect()->route('home');
    }

    // Validator function for registration data
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    }

    // Create a new user in the database
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
