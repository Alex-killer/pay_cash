<?php

namespace App\Http\Controllers;

use App\Services\TransferService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct(TransferService $service)
    {
        $this->service = $service;
    }
}
