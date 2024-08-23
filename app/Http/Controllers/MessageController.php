<?php

namespace App\Http\Controllers;

use App\Http\Requests\Message as RequestsMessage;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function addMessage(RequestsMessage $request){

        Message::create($request->validated());
        return redirect()->back()->with('success', 'The message was sent successfully');
    }
}
