<?php

namespace App\Services\Logger;

use App\Enums\LoggerType;

interface LoggerInterface
{
    /**
     * Sends message to current logger.
     *
     * @param string $message
     *
     * @return void
     */
    public function send(string $message): void;

    /**
     * Sends message by selected logger.
     *
     * @param string $message
     * @param LoggerType $loggerType
     *
     * @return void
     */
    public function sendByLogger(string $message, LoggerType $loggerType): void;

    /**
     * Gets current logger type.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Sets current logger type.
     *
     * @param LoggerType $type
     */
    public function setType(LoggerType $type): self;
}
