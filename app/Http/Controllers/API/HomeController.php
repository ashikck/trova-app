<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dbSeed()
    {
        \App\Models\Service::factory(10)->create();
        \App\Models\Booking::factory(50)->create();
    }
}
