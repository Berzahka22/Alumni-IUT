<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Chat Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff;
        }
        .chat-container {
            display: flex;
            flex-direction: column;
            height: 100vh;
            max-width: 600px;
            margin: 0 auto;
            border: 2px solid #c82333;
            border-radius: 8px;
            overflow: hidden;
        }
        .chat-header {
            background: linear-gradient(90deg, #c82333, #dc3545);
            color: white;
            padding: 15px;
            font-size: 24px;
            text-align: center;
        }
        .chat-messages {
            flex: 1;
            overflow-y: auto;
            padding: 15px;
            background: #f9f9f9;
        }
        .message {
            max-width: 70%;
            margin-bottom: 10px;
            padding: 12px 16px;
            border-radius: 20px;
            font-size: 16px;
            line-height: 1.4;
        }
        .sent {
            background-color: #c82333;
            color: white;
            margin-left: auto;
            text-align: right;
        }
        .received {
            background-color: #e9ecef;
            color: #333;
            margin-right: auto;
        }
        .chat-input {
            display: flex;
            border-top: 2px solid #dc3545;
            padding: 10px;
            background: white;
        }
        .chat-input input {
            flex: 1;
            padding: 12px 15px;
            font-size: 16px;
            border: 2px solid #c82333;
            border-radius: 30px;
            outline: none;
            transition: border-color 0.3s ease;
        }
        .chat-input input:focus {
            border-color: #dc3545;
        }
        .chat-input button {
            background-color: #c82333;
            border: none;
            color: white;
            font-size: 20px;
            padding: 0 18px;
            margin-left: 10px;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .chat-input button:hover {
            background-color: #a71d2a;
        }
    </style>
</head>
<body>
<div class="chat-container">
    <div class="chat-header">💬 Chat Local Laravel</div>
    <div class="chat-messages" id="chat-box"></div>
    <div class="chat-input">
        <input type="text" id="messageInput" placeholder="Tapez un message..." autocomplete="off" />
        <button id="sendBtn">&#9658;</button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function() {
    // On suppose que "user_id" sera fixé à 1 pour toi
    const currentUserId = 1;

    function fetchMessages() {
        $.get("{{ route('messages.fetch') }}", function(data) {
            $('#chat-box').html('');
            data.forEach(function(msg) {
                let cls = (msg.user_id == currentUserId) ? 'sent' : 'received';
                let username = msg.user?.name || 'Utilisateur';
                $('#chat-box').append('<div class="message ' + cls + '"><strong>' + username + ' :</strong> ' + msg.content + '</div>');
            });
            $('#chat-box').scrollTop($('#chat-box')[0].scrollHeight);
        });
    }

    $('#sendBtn').click(sendMessage);
    $('#messageInput').keypress(function(e) {
        if (e.which === 13) sendMessage();
    });

    function sendMessage() {
        let content = $('#messageInput').val().trim();
        if (content === '') return;
        $.post("{{ route('messages.send') }}", {
            _token: '{{ csrf_token() }}',
            user_id: currentUserId, // Envoi manuel
            content: content
        }, function() {
            $('#messageInput').val('');
            fetchMessages();
        });
    }

    fetchMessages();
    setInterval(fetchMessages, 2000);
});
</script>
</body>
</html>
