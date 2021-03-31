<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\ChatRoom;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ChatRoom $rooms)
    {
        return $rooms->all();
    }
    public function messages(Message $message, $id)
    {
        return $message->where('room_id', $id)
            ->with('user')
            ->orderBy('created_at', 'DESC')
            ->get();
    }
    public function newMessage(Request $r, Message $message, $id)
    {
        $message->user_id = Auth::id();
        $message->room_id = $id;
        $message->message = $r->message;
        $message->save();

        broadcast(new NewMessage($message))->toOthers();

        return $message;
    }
}
