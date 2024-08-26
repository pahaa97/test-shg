<?php

namespace App\Services\Logger;

use App\Enums\LoggerType;

class DbLogger implements LoggerInterface
{
    /**
     * Sends message to current logger.
     *
     * @param string $message
     *
     * @return void
     */
    public function send(string $message): void
    {
        echo '"'.$message.'"' . ' was sent via ' . LoggerType::Db->value . PHP_EOL;
    }

    /**
     * Sends message by selected logger.
     *
     * @param string $message
     * @param LoggerType $loggerType
     *
     * @return void
     */
    public function sendByLogger(string $message, LoggerType $loggerType): void
    {
        (new LoggerFactory)->createLogger($loggerType)->send($message);
    }

    /**
     * Gets current logger type.
     *
     * @return string
     */
    public function getType(): string
    {
        return LoggerType::Db->value;
    }

    /**
     * Sets current logger type.
     *
     * @param LoggerType $type
     * @return LoggerInterface
     */
    public function setType(LoggerType $type): LoggerInterface
    {
        return (new LoggerFactory)->createLogger($type);
    }
}
