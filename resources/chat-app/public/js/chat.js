// filepath: chat-app/chat-app/public/js/chat.js
document.addEventListener('DOMContentLoaded', function() {
    const sendBtn = document.getElementById('sendBtn');
    const messageInput = document.getElementById('messageInput');
    const chatBox = document.getElementById('chat-box');

    sendBtn.addEventListener('click', sendMessage);
    messageInput.addEventListener('keypress', function(e) {
        if (e.which === 13) sendMessage();
    });

    function sendMessage() {
        const message = messageInput.value.trim();
        if (message !== '') {
            appendMessage('sent', message);
            messageInput.value = '';
            chatBox.scrollTop = chatBox.scrollHeight;

            // Simulate receiving a response
            setTimeout(function() {
                appendMessage('received', 'Réponse : ' + message);
                chatBox.scrollTop = chatBox.scrollHeight;
            }, 800);
        }
    }

    function appendMessage(type, content) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${type}`;
        messageDiv.textContent = content;
        chatBox.appendChild(messageDiv);
    }
});