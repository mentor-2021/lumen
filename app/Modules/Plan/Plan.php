<?php

namespace App\Modules\Plan;

class Plan
{
    protected $fee = 0;

    public function getFee()
    {
        return $this->fee;
    }

    public function getDiscount()
    {
        return 0;
    }

    public function calculatePrice($period = 1)
    {
        $discount = $this->getDiscount($period);
        return $this->fee * $period - $discount;
    }
}
