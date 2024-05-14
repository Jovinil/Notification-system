<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Otp;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCredentialsController extends Controller
{
    public function login(Request $request){
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($validated)){
            dd(Auth::id());
            $request->session()->regenerate();
            return redirect()->route('user-index', Auth::id());
        }

        return redirect('/login');

    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }


    public function sendOTP(Request $request){
        $validaed = $request->validate([
            'cp_number' => 'required'
        ]);
        $isUser = User::where('cp_number', $validaed['cp_number'])
        ->exists();
        if($isUser){
            $user = User::select('id', 'cp_number')
            ->where('cp_number', $validaed['cp_number'])
            ->first();
            UserCredentialsController::send($user->id);
            return view('confirm-otp', compact('user'));
        }
        return view('send-otp');
    }

    public function check(Request $request, $id){
        $userRequest = $request->validate([
            'otp' => 'required'
        ]);
        $isOtp = Otp::where([
            ['otp', $userRequest['otp']],
            ['user_id', $id]
        ])
        ->exists();

        if($isOtp){
            $user = User::select('id', 'cp_number')
            ->where('id', $id)
            ->first();
            return view('change-password', compact('user'));

        }

        return view('confirm-otp');

    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'password' => 'required|confirmed|min:8'
        ]);
        $user = User::find($id);
        $user->update($validated);

        return redirect()->route('index');
    }

    public function send($id)
    {
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $twilio = new Client($sid, $token);

        $message = $twilio->messages
            ->create(
                "+639121733929", // to
                array(
                    "from" => env('TWILIO_PHONE'),
                    "body" => UserCredentialsController::createOTP($id)
                )
            );
    }


    public function createOTP($id)
    {
        $otp = rand(0, 9999);
        if ($otp < 1000) {
            $otp = str_pad($otp, 4, '0');
        }
        Otp::create(['otp' => $otp, 'user_id' => $id]);
        return $otp;
    }
}
