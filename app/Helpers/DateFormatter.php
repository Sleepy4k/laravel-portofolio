<?php

use Carbon\Carbon;

/**
 * Convert date format from Y-m-d to d-m-Y
 *
 * @param mixed $date
 * @return date
 */
if (!function_exists('dateYmdToDmy')) {
    function dateYmdToDmy($date)
    {
        return Carbon::parse($date)->format('d-m-Y');
    }
}

/**
 * Convert date format from d-m-Y to Y-m-d
 *
 * @param mixed $date
 * @return date
 */
if (!function_exists('dateDmyToYmd')) {
    function dateDmyToYmd($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }
}