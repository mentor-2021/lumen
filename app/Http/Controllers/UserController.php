<?php

namespace App\Http\Controllers;

use App\Modules\Plan\Annual;
use App\Modules\Plan\Monthly;
use App\Modules\Plan\Free;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function plan(Request $request, $id)
    {
        $masterData = require_once(__DIR__.'/../../../resources/data/users.php');

        $target = [];
        foreach ($masterData as $element) {
            if ($element["id"] == $id) {
                $target = $element;
                break;
            }
        }

        if (!$target) {
            return $this->fail("invalid data");
        }

        $membership = $id % 3 + 1;
        $plan = $this->getPlan($membership);

        $fee = $plan->getFee();

        $data = [
            "user" => $target,
            "plan" => $plan->getName(),
            "fee" => $fee
        ];

        return $this->success($data);
    }

    public function updatePlan(Request $request, $id)
    {
        $masterData = require_once(__DIR__.'/../../../resources/data/users.php');

        $target = [];
        foreach ($masterData as $element) {
            if ($element["id"] == $id) {
                $target = $element;
                break;
            }
        }

        if (!$target) {
            return $this->fail("invalid data");
        }

        $payload = $request->input();

        $membership = $payload['membership'];
        $plan = $this->getPlan($membership);

        $fee = $plan->calculatePrice($payload['period']);

        $data = [
            "user" => $target,
            "fee" => $fee
        ];

        return $this->success($data);
    }

    private function getPlan($membership)
    {
        if ($membership == 3) {
            return new Annual();
        }
        if ($membership == 2) {
            return new Monthly();
        }

        if ($membership == 1) {
            return new Free();
        }


        return new Free();
    }
}
