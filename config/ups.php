<?php

return [
    /*
    |--------------------------------------------------------------------------
    | UPS Credentials
    |--------------------------------------------------------------------------
    |
    | This option specifies the UPS credentials for your account.
    | You can put it here but I strongly recommend to put thoses settings into your
    | .env & .env.example file.
    |
    */
    'access_key' => env('UPS_ACCESS_KEY'),
    'user_id'    => env('UPS_USER_ID'),
    'password'   => env('UPS_PASSWORD'),
];