<?php

/**
 * Format plain file size into community standard
 * 
 * @param int $bytes
 * @param int $precision
 * @return string
 */
if (!function_exists('formatFileBytes')) {
    function formatFileBytes($bytes, $precision = 2)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB']; 
    
        $bytes = max($bytes, 0); 
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
        $pow = min($pow, count($units) - 1); 

        return round((float) intToRupiah($bytes), $precision) . ' ' . $units[$pow];
    }
}