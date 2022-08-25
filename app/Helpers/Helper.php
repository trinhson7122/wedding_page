<?php
if (!function_exists('formatMoney')) {
    function formatMoney(float $price, string $tien = ''): string
    {
        return number_format($price) . " $tien";
    }
}
