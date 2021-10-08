<?php

namespace App\Modules\Plan;

class Annual extends Plan
{
    function __construct()
    {
        $this->fee = 100;
    }

    public function getDiscount($period = 1)
    {
        if ($period <= 1) {
            return 0;
        }
        if ($period <= 3) {
            return 30;
        }
        return 50;
    }
}
