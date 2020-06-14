<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPassword extends Controller
{
    
    public function forgot()
    {
        return view('security.forgot');
    }
    public function password(Request $request)
    {
dd($request->all());
$user = User::whereEmail($request->email)->first();
if(count($user) == 0)
{
return redirect() -> back() -> with(['error' => 'Email Doesnt exits']);
}
$user = Sentinel::findByID($user->id);
$reminder = Reminder::exits($user) ? : Reminder::create($user);
$this->sendEmail($user,$reminder->code);
return redirect() -> back() -> with(['success' => 'Reset Code Has Been Sent']);
    }

public function sendEmail($user,$code){
    
}
}
