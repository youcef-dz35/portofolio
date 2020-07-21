<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactMessageController extends Controller
{
    //
    public function create()
    {
        return view('index');
    }
    public function store(Request $request)
    {
        $content = request()->validate([
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'email' => 'required|email',
        ]);

        Mail::to('kebiryoucef07@gmail.com')->queue(new TestEmail($content));
        return 'Email sent';


    //     Mail::send('emails.contact-message', [
    //         'msg' =>$request->message,
    //         'subject'=>$request->subject
    //     ], function ($mail) use ($request) {
    //         $mail->from($request->email,$request->name);

    //         $mail->to('kebiryoucef07@gmail.com');

    //     }
    // );
    // return redirect()->back()->with('flash_message','Thank You For Contacting Me ');
    }
}
