<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ChatController extends Controller
{
    // Affiche la page du chat
    public function index()
    {
        return view('chat'); // Nom du fichier Blade (resources/views/chat.blade.php)
    }

    // Récupère tous les messages
    public function fetchMessages()
    {
        $messages = Message::orderBy('created_at', 'asc')->get();
        return response()->json($messages);
    }

    // Envoie un message
    public function sendMessage(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
            'user_id' => 'required|integer'
        ]);

        $message = Message::create([
            'user_id' => $request->user_id,
            'content' => $request->content,
        ]);

        return response()->json($message);
    }
}
