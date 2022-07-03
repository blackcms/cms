<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\CheckForMaintenance as Middleware;

class CheckForMaintenance extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance is enabled.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
