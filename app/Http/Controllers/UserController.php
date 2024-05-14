<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        Log::info('Incoming request data: ', $request->all());

        // Validate the request data
        $validated = $request->validate([
            "name" => "required|string|max:50",
            "username" => 'required|string|max:30|unique:users,username',
            "cp_number" => "required|string|max:11|starts_with:09|unique:users,cp_number",
            "password" => "required|string|max:20",
            "confirm_password" => "required|string|max:20"
        ]);

        // Check if passwords match
        if ($validated['password'] !== $validated['confirm_password']) {
            return redirect()->back()->withErrors(['password' => 'Passwords do not match'])->withInput();
        } else {
            // Remove confirm_password from validated data
            unset($validated['confirm_password']);

            // Log validated data before hashing
            Log::info('Validated data before hashing: ', $validated);

            // Hash the password
            $validated['password'] = Hash::make($validated['password']);

            // Log validated data before user creation
            Log::info('Validated data before user creation: ', $validated);

            // Explicitly specify columns
            $user = User::create([
                'name' => $validated['name'],
                'username' => $validated['username'],
                'cp_number' => $validated['cp_number'],
                'password' => $validated['password'],
            ]);

            Log::info('User created: ', $user->toArray());

            return redirect()->route('login');
        }
    }
}
