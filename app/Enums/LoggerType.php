<?php

namespace App\Enums;

enum LoggerType: string
{
    case File = 'file';
    case Email = 'email';
    case Db = 'db';
}
