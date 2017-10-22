<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => '359165235667-ng0igonggau98i9viuk31ni8um6k3ogt.apps.googleusercontent.com',
        'client_secret' => 'ccK8LEvuEupGIVZ0wT6ufxBJ',
        'redirect' => 'https://localhost/joika3/callback/google',
    ],

    'facebook' => [
        'client_id' => '371608533180551',
        'client_secret' => 'be35b6db1488323592f3ab4643ff1339',
        'redirect' => 'https://localhost/joika3/callback/facebook',
    ],

    'twitter' => [
        'client_id' => 'ENbdXpTx8v1TiH7Ti38c1n8Nu',
        'client_secret' => 'k7IQQBa1s7cUMJ53MzYvX1vmeltAgRg8lARgoEApcf0CIPPIlI',
        'redirect' => 'https://localhost/joika3/callback/twitter',
    ],

    'linkedin' => [
        'client_id' => '86vy5g9926y0d2',
        'client_secret' => 'c9GxOb4dWRB6CdT9',
        'redirect' => 'https://localhost/joika3/callback/linkedin',  
    ],

    'instagram' => [
        'client_id' => 'b04ca49aa30c43af9ab5cc63216f087f',
        'client_secret' => '7131895dfa1449579874acc1c77583b2',
        'redirect' => 'https://localhost/joika3/callback/instagram',
    ],

];
