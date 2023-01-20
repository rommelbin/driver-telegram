<?php

namespace BotMan\Drivers\Telegram\Messages;


class TelegramQuestionEditMessage extends TelegramQuestionMessage {
    public function setMessageId($message_id)
    {
        $this->message_id = $message_id;
        return $this;
    }
    public function getMessageId(): string
    {
        return $this->message_id;
    }
}
