<?php

namespace App\Services;

namespace App\Services;

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
