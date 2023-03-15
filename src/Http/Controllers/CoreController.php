<?php

namespace TursunboyevJahongir\LaravelApi\Http\Controllers;

use TursunboyevJahongir\LaravelApi\Services\CoreService;
use TursunboyevJahongir\LaravelApi\Traits\Responsable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

abstract class CoreController extends Controller
{
    use Responsable, AuthorizesRequests, ValidatesRequests;

    protected CoreService $service;

    public function __construct(CoreService $service)
    {
        $this->service = $service;
    }
}
