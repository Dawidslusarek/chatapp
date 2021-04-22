<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\ChatRoom;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;


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
        $idUser = Auth::id();
        $message['published_at'] = Carbon::now();
        return [
            $message
                ->join('users', 'users.id', '=', 'messages.user_id')
                ->where('messages.room_id', '=', $id)
                ->with('user')
                ->orderBy('messages.created_at', 'DESC')
                ->limit(50)
                ->get(),
            $idUser
        ];
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
    public function getAllName(User $user)
    {
        $names = User::all()->pluck('name');
        return $names;
    }
}
