<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public function success($data)
    {
        $res = [
            "data" => $data,
            "error" => null
        ];
        return response()->json($res);
    }

    public function fail($error)
    {
        $res = [
            "data" => null,
            "error" => $error
        ];
        return response()->json($res);
    }
}
