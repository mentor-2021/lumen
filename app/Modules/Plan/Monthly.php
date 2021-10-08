<?php

namespace App\Modules\Plan;

class Monthly extends Plan
{
    public function __construct()
    {
        $this->fee = 10;
        $this->name = 'monthly';
    }

    public function getDiscount($period = 1)
    {
        if ($period <= 3) {
            return 0;
        }
        if ($period <= 6) {
            return 10;
        }
        return 20;
    }
}
