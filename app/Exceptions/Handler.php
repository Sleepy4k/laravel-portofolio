<?php

namespace App\Exceptions;

use Throwable;
use App\Traits\ApiRespons;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    use ApiRespons;

    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (\Spatie\Permission\Exceptions\UnauthorizedException $e, $request) {
            if ($request->expectsJson() or $request->wantsJson()) {
                return $this->createResponse('You do not have the required authorization', [
                    'error' => $e->getMessage()
                ], 403);
            }

            if (auth()->check() && auth()->user()->getRoleNames()[0] != 'user') {
                return to_route('admin.dashboard.index');
            } else {
                return to_route('main.dashboard.index');
            }
        });
    }
}
