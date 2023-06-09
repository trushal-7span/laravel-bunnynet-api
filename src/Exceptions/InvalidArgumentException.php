<?php

namespace SevenSpan\BunnyNet\Exceptions;

use Exception;

class InvalidArgumentException extends Exception
{
    protected $message;
    protected $code;

    public function __construct($message, $code = 400)
    {
        $this->message = $message;
        $this->code = $code;
    }
    public function report()
    {
        return '';
    }

    public function render()
    {
        return response()->json(['message' => $this->message], $this->code);
    }
}
