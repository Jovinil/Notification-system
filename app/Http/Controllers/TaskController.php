<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Rules\DateFormat;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    public function index(int $id)
    {
        $user = User::find($id);
        $tasks = Task::select('id', 'user_id', 'task', 'message', 'deadline', 'created_at')->get();
        $currentDate = Carbon::now()->format('F j, Y');

        return view('pages.user', compact('tasks', 'user', 'currentDate'));
    }

    public function testCase(){
        Task::create([
            'user_id' => 1,
            'task' => 'Example Task',
            'message' => 'This is a sample message.',
            'deadline' => now()->addDays(7), // Set the deadline to 7 days from now
        ]);
    }

    public function getUserID(int $id){
        $user = User::find($id)->first();
        Log::info($user);
        return view('crud.create-task', compact('user'));
    }

    // public function createTask(Request $request, int $id)
    // {
    //     $validated = $request->validate([
    //         "user_id" => "required|integer|max:10",
    //         "task" => "required|max:50",
    //         "message" => "required|string|max:1000", // Corrected validation rule
    //         "deadline" => ["required", new DateFormat],
    //     ]);

    //     $deadline = Carbon::createFromFormat('d/m/Y', $validated['deadline'])->format('Y-m-d');

    //     // Replace the original deadline value with the parsed one
    //     $validated['deadline'] = $deadline;

    //     $validated['user_id'] = $id;

    //     Task::create($validated);

    //     return redirect()->route("user-index", ['id' => $id])->with('success', 'Task successfully added');
    // }

    public function createTask(Request $request, int $id)
    {
        // Check if the user already has 5 tasks
        $taskCount = Task::where('user_id', $id)->count();

        if ($taskCount >= 5) {
            return redirect()->route("user-index", ['id' => $id])->with('danger', 'You can only have a maximum of 5 tasks.');
        }

        // Validate the incoming request data
        $validated = $request->validate([
            "task" => "required|max:50",
            "message" => "required|string|max:1000", // Corrected validation rule
            "deadline" => ["required", new DateFormat],
        ]);

        $deadline = Carbon::createFromFormat('d/m/Y', $validated['deadline'])->format('Y-m-d');

        // Replace the original deadline value with the parsed one
        $validated['deadline'] = $deadline;
        $validated['user_id'] = $id;

        // Create the new task
        Task::create($validated);

        return redirect()->route("user-index", ['id' => $id])->with('success', 'Task successfully added');
    }


    public function getTask(int $user_id, int $task_id)
    {
        $user = User::where('id', $user_id)->first();
        $task = Task::where('id', $task_id)->first();

        return view('crud.read-task', compact('task', 'user'));
    }

    public function editTask(int $user_id, int $task_id)
    {
        $user = User::where('id', $user_id)->first();
        $task = Task::where('id', $task_id)->first();

        return view('crud.edit-task', compact('task', 'user'));
    }

    public function updateTask(Request $request, int $user_id, int $task_id)
    {
        $task = Task::where('id', $task_id)->first();

        $validated = $request->validate([
            "task" => "required|max:50",
            "message" => "required|string|max:1000", // Corrected validation rule
            "deadline" => ["required", new DateFormat],
        ]);

        $deadline = Carbon::createFromFormat('d/m/Y', $validated['deadline'])->format('Y-m-d');

        // Replace the original deadline value with the parsed one
        $validated['deadline'] = $deadline;

        $task->update($validated);

        return redirect()->route("user-index", ['id' => $user_id])->with('success', 'Task successfully updated');
    }

    public function deleteTask(int $user_id, int $task_id)
    {
        $task = Task::where('id', $task_id)->first();
        $task->delete();
        return redirect()->route("user-index", ['id' => $user_id])->with('danger', 'Task successfully deleted');
    }
}
