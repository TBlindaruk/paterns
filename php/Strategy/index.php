<?php

interface Logger
{
    public function log($data);
}

class LogToFile implements Logger
{
    public function log($data)
    {
        var_dump('log to file');
    }
}

class LogToDatabase implements Logger
{
    public function log($data)
    {
        var_dump('log to database');
    }
}

class LogToXWebService implements Logger
{
    public function log($data)
    {
        var_dump('log to service');
    }
}

class App
{
    public function log($data, Logger $logger)
    {
        $logger->log($data);
    }
}

$app = new App;
$app->log('Info to log', new LogToXWebService());
$app->log('Info to log', new LogToDatabase());
$app->log('Info to log', new LogToFile());