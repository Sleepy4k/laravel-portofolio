<?php
  
namespace App\Traits;

use Illuminate\Support\Facades\File;

trait LogReader
{
    use SystemLog;

    /**
     * Get file list from laravel app log
     *
     * @param string $type
     * @param string $channel
     * @return array
     */
    protected function getFileList($type, $channel = 'laravel')
    {
        $logs = [];

        try {
            if ($type == 'daily') {
                $files = glob(storage_path('logs/'.$channel.'-*.log'));
                $files = array_reverse($files);
            } else {
                $files = glob(storage_path('logs/'.$channel.'.log'));
            }
    
            foreach ($files as $file) {
                $name = explode("/", $file)[1];
                $size = File::size(storage_path('logs/'.$name));
                $timestamp = File::lastModified(storage_path('logs/'.$name));
                $type = File::type(storage_path('logs/'.$name));
                $content = File::mimeType(storage_path('logs/'.$name));

                $logs[] = [
                    'name' => $name,
                    'size' => formatFileBytes($size),
                    'type' => $type,
                    'content' => $content,
                    'last_updated' => date('Y-m-d H:i:s', $timestamp),
                ];
            }
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());
        }

        return $logs;
    }

    /**
     * Read file content from laravel app log
     *
     * @param date $date
     * @return array
     */
    protected function getFileContent($date)
    {
        $logs = [];

        try {
            $content = file_get_contents(storage_path('logs/'.$date.'.log'));
        } catch (\Throwable $th) {
            return 'file not found in our storage, please double check it';
        }

        try {
            $pattern = "/^\[(?<date>.*)\]\s(?<env>\w+)\.(?<type>\w+):(?<message>.*)/m";

            preg_match_all($pattern, $content, $matches, PREG_SET_ORDER, 0);

            foreach ($matches as $match) {
                $logs[] = [
                    'env' => $match['env'],
                    'type' => $match['type'],
                    'timestamp' => $match['date'],
                    'message' => trim($match['message'])
                ];
            }
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());
        }
        
        return $logs;
    }

    /**
     * Read all file content from laravel app log
     *
     * @param string $type
     * @param string $channel
     * @param date $date
     * @return array
     */
    protected function getAllFileContent($type, $channel = 'laravel', $date = null)
    {
        $logs = [];
        $content = null;
        $pattern = null;

        try {
            if ($type == 'daily') {
                if ($date) {
                    $content = file_get_contents(storage_path('logs/'.$channel.'-'.$date.'.log'));
                } else {
                    $content = file_get_contents(storage_path('logs/'.$channel.'-'.dateDmyToYmd(now()).'.log'));
                }
            } else {
                $content = file_get_contents(storage_path('logs/'.$channel.'.log'));
            }

            $pattern = "/^\[(?<date>.*)\]\s(?<env>\w+)\.(?<type>\w+):(?<message>.*)/m";

            preg_match_all($pattern, $content, $matches, PREG_SET_ORDER, 0);

            foreach ($matches as $match) {
                $logs[] = [
                    'timestamp' => $match['date'],
                    'env' => $match['env'],
                    'type' => $match['type'],
                    'date' => dateDmyToYmd(now()),
                    'message' => trim($match['message'])
                ];
            }
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());
        }
        
        return $logs;
    }
}