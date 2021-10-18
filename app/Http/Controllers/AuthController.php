<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // $payload = [
        //     "email" => "user_11@gmail.comxxxxxxxxx"
        // ];
        $payload = $request->input();
        $masterData = require_once(__DIR__.'/../../../resources/data/users.php');

        // $data = array_filter($masterData, function ($target) use ($payload) {
        //     return $target["email"] == $payload["email"];
        // });
        // $target = array_shift($data);

        $target = [];
        foreach ($masterData as $element) {
            if ($element["email"] == $payload["email"]) {
                $target = $element;
                break;
            }
        }

        if ($target) {
            return $this->success($target);
        }

        return $this->fail("invalid data");
    }
}
