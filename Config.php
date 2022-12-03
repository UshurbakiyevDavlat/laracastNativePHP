<?php

class Config
{
    public static function env()
    {
        return [
            'database' => [
                'host' => 'localhost',
                'port' => '3306',
                'dbname' => 'php_native_lessons',
                'charset' => 'utf8mb4'
            ],
        ];
    }
}