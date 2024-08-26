<?php

return [
    'default' => env('MY_LOGGER', 'email'),

    'settings' => [
        'email' => [
            'send_to' => env('MY_LOGGER_SEND_TO', 'example@gmail.com')
        ]
    ]
];
