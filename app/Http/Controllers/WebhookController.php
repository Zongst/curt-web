<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        log::info($request->all());


    }
}
