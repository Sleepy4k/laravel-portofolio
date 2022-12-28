<?php

/**
 * Replace null varible to empty string
 * 
 * @param mixed $varible
 * @return string
 */
if (!function_exists('nullToEmptyString')) {
    function nullToEmptyString($varible)
    {
        return $varible = $varible === null ? "" : $varible;
    }
}