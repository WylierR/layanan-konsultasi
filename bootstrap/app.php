<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Spatie\Permission\Middleware\RoleMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias(['role' => RoleMiddleware::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // $exceptions->render(function (Throwable $e, Request $request) {
        //     if ($e instanceof UnauthorizedException) {
        //         return response()->view('errors.index', ['exception' => $e->getMessage()], 403);
        //     }
        //     return parent::render($request, $e);
        // });
    })->create();
