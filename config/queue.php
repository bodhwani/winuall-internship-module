<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Driver
    |--------------------------------------------------------------------------
    |
    | The Laravel queue API supports a variety of back-ends via an unified
    | API, giving you convenient access to each back-end using the same
    | syntax for each one. Here you may set the default queue driver.
    |
<<<<<<< HEAD
    | Supported: "null", "sync", "database", "beanstalkd", "sqs", "redis"
=======
    | Supported: "null", "sync", "database", "beanstalkd",
    |            "sqs", "iron", "redis"
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c
    |
    */

    'default' => env('QUEUE_DRIVER', 'sync'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
<<<<<<< HEAD
            'table' => 'jobs',
            'queue' => 'default',
=======
            'table'  => 'jobs',
            'queue'  => 'default',
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c
            'expire' => 60,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
<<<<<<< HEAD
            'host' => 'localhost',
            'queue' => 'default',
            'ttr' => 60,
=======
            'host'   => 'localhost',
            'queue'  => 'default',
            'ttr'    => 60,
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c
        ],

        'sqs' => [
            'driver' => 'sqs',
<<<<<<< HEAD
            'key' => 'your-public-key',
            'secret' => 'your-secret-key',
            'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
            'queue' => 'your-queue-name',
            'region' => 'us-east-1',
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => 'default',
            'expire' => 60,
=======
            'key'    => 'your-public-key',
            'secret' => 'your-secret-key',
            'queue'  => 'your-queue-url',
            'region' => 'us-east-1',
        ],

        'iron' => [
            'driver'  => 'iron',
            'host'    => 'mq-aws-us-east-1.iron.io',
            'token'   => 'your-token',
            'project' => 'your-project-id',
            'queue'   => 'your-queue-name',
            'encrypt' => true,
        ],

        'redis' => [
            'driver'     => 'redis',
            'connection' => 'default',
            'queue'      => 'default',
            'expire'     => 60,
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control which database and table are used to store the jobs that
    | have failed. You may change them to any database / table you wish.
    |
    */

    'failed' => [
        'database' => env('DB_CONNECTION', 'mysql'),
<<<<<<< HEAD
        'table' => 'failed_jobs',
=======
        'table'    => 'failed_jobs',
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c
    ],

];
