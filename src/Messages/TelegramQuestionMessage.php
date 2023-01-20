<?php

namespace BotMan\Drivers\Telegram\Messages;

class TelegramQuestionMessage
{
    protected $text = "";
    protected array $keyboard = ['reply_markup' => ""];
    protected string $message_id = "";

    public function __construct($text = "")
    {
        $this->text = $text;
    }

    public static function create($text = "")
    {
        return new static($text);
    }

    public function setKeyboard($keyboard)
    {
        $this->keyboard = $keyboard;
        return $this;
    }

    public function getReplyMarkup()
    {
        return $this->keyboard['reply_markup'];
    }

    public function getText()
    {
        return $this->text;
    }
}
