<?php

namespace App\Modules\Plan;

class Annual extends Plan
{
    public function __construct()
    {
        $this->fee = 100;
        $this->name = 'annual';
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
