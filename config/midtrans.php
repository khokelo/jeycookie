<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Midtrans Server Key
    |--------------------------------------------------------------------------
    |
    | This value is the server key provided by Midtrans for authenticating API
    | requests. Ensure you set this in your environment file to keep it secure.
    |
    */

    'server_key' => env('MIDTRANS_SERVER_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | Midtrans Client Key
    |--------------------------------------------------------------------------
    |
    | This value is the client key provided by Midtrans for client-side
    | integrations. Ensure you set this in your environment file to keep it secure.
    |
    */

    'client_key' => env('MIDTRANS_CLIENT_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | Midtrans Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the environment for Midtrans transactions.
    | It can be set to 'sandbox' for testing or 'production' for live transactions.
    |
    */

    'environment' => env('MIDTRANS_ENVIRONMENT', 'sandbox'),

];