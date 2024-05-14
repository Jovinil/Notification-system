<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Rules\DateFormat;
use Carbon\Carbon;

class TaskController extends Controller
{
    public function index(int $id)
    {
        $user = User::find($id);
        $tasks = Task::select('user_id', 'task', 'message', 'deadline', 'created_at')->get();

        return view('pages.user', compact('tasks', 'user'));
    }

    public function getUserID(int $id){
        $user = User::find($id);

        return view('crud.create-task', compact('user'));
    }

    public function testCase(){
        Task::create([
            'user_id' => 1,
            'task' => 'Example Task',
            'message' => 'This is a sample message.',
            'deadline' => now()->addDays(7), // Set the deadline to 7 days from now
        ]);
    }

    public function createTask(Request $request, int $id)
    {
        $validated = $request->validate([
            "user_id" => "required|integer|max:10",
            "task" => "required|max:50",
            "message" => "required|string|max:1000", // Corrected validation rule
            "deadline" => ["required", new DateFormat],
        ]);

        $deadline = Carbon::createFromFormat('d/m/Y', $validated['deadline'])->format('Y-m-d');

        // Replace the original deadline value with the parsed one
        $validated['deadline'] = $deadline;

        $validated['user_id'] = $id;

        Task::create($validated);

        return redirect()->route("user", ['id' => $id])->with('success', 'Employee record added successfully');
    }
}
