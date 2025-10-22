<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrackController extends Controller 
{
    public function github(string $username)
    {
        $resp = Http::get("https://api.github.com/users/{$username}/repos");
        return response()->json([
            'count' => $resp->ok() ? count($resp->json()) : 0,
            'sample' => $resp->json()[0]['full_name'] ?? null,
            'status' => $resp->status(),
        ]);
    }

    public function dog()
    {
        $resp = Http::get("https://dog.ceo/api/breeds/image/random");
        return response()->json([
            'image' => data_get($resp->json(), 'message'),
            'status' => $resp->status(),
        ]);
    }

    /*
    public function signup(Request $request)
    {
        $payload = [
            'username' => $request->input('username', 'Kira Yamato'),
            'email'    => $request->input('email', 'kira-yamato@seedfreedom.com.tw'),
            'password' => $request->input('password', 'SuperSecret!'),
        ];

        $resp = Http::post('https://reqres.in/api/register', $payload);

        return response()->json([
            'sent'   => $payload,
            'status' => $resp->status(),
            'body'   => $resp->json(),
        ]);
    }
    */
}
