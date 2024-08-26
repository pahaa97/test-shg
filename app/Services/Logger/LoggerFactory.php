<?php

namespace App\Services\Logger;

use App\Enums\LoggerType;

class LoggerFactory
{
    public function createLogger(LoggerType $type): LoggerInterface
    {
        return match($type) {
            LoggerType::Email => new EmailLogger(),
            LoggerType::File => new FileLogger(),
            LoggerType::Db => new DbLogger()
        };
    }
}
