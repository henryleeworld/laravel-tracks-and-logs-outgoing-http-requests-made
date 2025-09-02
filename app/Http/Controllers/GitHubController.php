<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class GitHubController extends Controller 
{
    public function spy() 
    {
        Http::get('https://github.com/henryleeworld');
    }
}
