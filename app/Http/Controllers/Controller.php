<?php

namespace App\Http\Controllers;

use Iluminate\Foundation\Auth\Access\AuthorizesRequests;
use Iluminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}