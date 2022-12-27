<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function logs(){
        $logs = auth()->user()->logs;
        return view('log', compact('logs'));
    }
}
