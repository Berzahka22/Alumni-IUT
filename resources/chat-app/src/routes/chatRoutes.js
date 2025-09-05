const express = require('express');
const ChatController = require('../controllers/chatController');

const router = express.Router();
const chatController = new ChatController();

function setRoutes(app) {
    router.post('/send', chatController.sendMessage.bind(chatController));
    router.get('/messages', chatController.getMessages.bind(chatController));
    
    app.use('/chat', router);
}

module.exports = setRoutes;