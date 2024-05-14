<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function createUser(Request $request){
        Log::info('Incoming request data: ', $request->all());
        $validated = $request->validate([
            "username" => 'required|string|max:30|unique:users,username',
            "name" => "required|string|max:50",
            "phone_number" => "required|string|max:11|starts_with:09|unique:user,phone_number",
            "password" => "required|string|max:20"
        ]);

        Log::info('Validated data: ', $validated);

        $hash = Hash::make($validated['password']);

        $validated['password'] = $hash;

        if ($validated){
            Log::info('Validated data: ', $validated);
        }

        // User::create($validated);

        // return redirect()->route('employee.index')->with('success', 'Employee record added successfully');
    }
}
