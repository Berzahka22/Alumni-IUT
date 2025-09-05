class ChatController {
    constructor() {
        this.messages = [];
    }

    sendMessage(req, res) {
        const { sender, receiver, content } = req.body;
        const message = { sender, receiver, content, timestamp: new Date() };
        this.messages.push(message);
        res.status(200).json({ success: true, message });
    }

    getMessages(req, res) {
        res.status(200).json(this.messages);
    }
}

module.exports = new ChatController();