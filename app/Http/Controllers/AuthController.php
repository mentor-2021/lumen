<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // $payload = [
        //     "email" => "user_11@gmail.com"
        // ];
        $payload = $request->input();
        $masterData = require_once(__DIR__.'/../../../resources/data/users.php');

        // $data = array_filter($masterData, function ($target) use ($payload) {
        //     return $target["email"] == $payload["email"];
        // });
        // $target = array_shift($data);

        foreach ($masterData as $target) {
            if ($target["email"] == $payload["email"]) {
                break;
            }
        }

        return $this->render($target);
    }
}
