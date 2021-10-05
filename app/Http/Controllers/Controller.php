<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //

    public function render($data)
    {
        $res = [
            "data" => $data,
            "error" => null
        ];
        return response()->json($res);
    }
}
