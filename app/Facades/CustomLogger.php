<?php

namespace App\Facades;

use App\Enums\LoggerType;
use App\Services\Logger\LoggerInterface;
use Illuminate\Support\Facades\Facade;

/**
 * @method static void send(string $message)
 * @method static void sendByLogger(string $message, LoggerType $loggerType)
 * @method static string getType()
 * @method static LoggerInterface setType(LoggerType $type)
 */
class CustomLogger extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return LoggerInterface::class;
    }
}
