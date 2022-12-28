<?php

/**
 * Change from plain number to rupiah format
 * 
 * @param int $integer
 * @return float
 */
if (!function_exists('intToRupiah')) {
    function intToRupiah($integer)
    {
        return (float) number_format($integer, 0, ',', '.');
    }
}