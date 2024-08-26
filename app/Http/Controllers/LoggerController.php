<?php

namespace App\Http\Controllers;

use App\Enums\LoggerType;
use App\Facades\CustomLogger;

class LoggerController extends Controller
{
    /**
     * Sends a log message to the default logger.
     */
    public function log(): void
    {
        CustomLogger::send('This is a log message.');
    }

    /**
     * Sends a log message to a special logger.
     *
     * @param string $type
     */
    public function logTo(string $type): void
    {
        $loggerType = LoggerType::from($type);
        CustomLogger::setType($loggerType)->send('This is a log message.');
    }

    /**
     * Sends a log message to all loggers.
     */
    public function logToAll(): void
    {
        $message = 'This is a log message.';

        foreach (LoggerType::cases() as $loggerType) {
            CustomLogger::sendByLogger($message, $loggerType);
        }
    }
}
