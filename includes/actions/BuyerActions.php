<?php

class BuyerActions
{
    public function getSum($data)
    {
        $sum = [];
        foreach ($data as $el) {
            $sum[] = $el['cost'];
        }
        return array_sum($sum);
    }
}
