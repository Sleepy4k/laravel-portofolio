<?php
  
namespace App\Traits;

use Illuminate\Support\Facades\Log;

trait SystemLog
{
    /**
     * Send report to system log
     *
     * @return bool
     */
    protected function sendReportLog($type, $message)
    {
        try {
            if ($type == 'debug') {
                Log::debug($message);
            } else if ($type == 'error') {
                Log::error($message);
            } else if ($type == 'alert') {
                Log::alert($message);
            } else if ($type == 'info') {
                Log::info($message);
            } else if ($type == 'warning') {
                Log::warning($message);
            }

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}