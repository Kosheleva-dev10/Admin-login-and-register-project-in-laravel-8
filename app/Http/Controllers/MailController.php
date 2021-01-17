<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\UserModel;
use Illuminate\Support\facades\DB;

class MailController extends Controller
{
    public function sendEmail(Request $req)
    {
        $user = UserModel::where(['email'=>$req->email])->first();
        if (count($user) < 1) {
            return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
        }
        $details = [
            'title' => 'Forgot Password',
            'body' => 'Your vivzon store admin password is '.bcrypt($user->password)
        ];
        Mail::to($req->email)->send(new SendMail($details));
        return redirect("/");
    }
}
