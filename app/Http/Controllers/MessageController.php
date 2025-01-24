<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        return view('messages.index');
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|string',
                'subject' => 'required|string',
                'email' => 'required|email',
                'message' => 'required|string',
            ]);

            Message::create($request->all());

            return back()->with('success', 'Message sent successfully');
        } catch (\Exception $e) {
            return back()->with('error', 'Please make sure to fill out all the fields. It makes it easier for us to assist you.');
        }

    }

    public function toggle(Message $message)
    {
        $message->is_read = !$message->is_read;
        $message->save();

        return back()->with('success', 'Message status updated successfully');
    }
}
