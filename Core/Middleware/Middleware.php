<?php

class Middleware
{
    public const MAP = [
        'auth' => Auth::class,
        'guest' => Guest::class
    ];

    public static function resolve($key)
    {
        if (!$key) {
            return;
        } else {
            $middleware = static::MAP[$key] ?? false;
        }


        if (!$middleware) {
            throw new \Exception("no matching middleware");
        }
        (new $middleware)->handle();
    }
}
