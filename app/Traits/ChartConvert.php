<?php
  
namespace App\Traits;

use Illuminate\Support\Facades\DB;

trait ChartConvert
{
    use SystemLog;

    /**
     * Get and convert all data from this year into array data
     *
     * @param string $table
     * @param string $cause
     * @param array $raw
     * @return array
     */
    protected function getTableData($table, $cause = 'created_at', $raw = null)
    {
        $data = [];

        try {
            $year = date('Y');

            for($i = 1; $i <= 12; $i++){
                if ($raw == null) {
                    $data[] = DB::table($table)->whereMonth($cause, $i)->whereYear($cause, $year)->count();
                } else {
                    $data[] = DB::table($table)->where($raw)->whereMonth($cause, $i)->whereYear($cause, $year)->count();
                }
            }
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());
        }
        
        return $data;
    }

    /**
     * Select and convert all data from this year into array data
     *
     * @param string $table
     * @param array $raw
     * @param string $cause
     * @param string $type
     * @return array
     */
    protected function selectTableData($table, $raw, $cause = 'created_at', $type = 'avg')
    {
        $data = [];

        try {
            $year = date('Y');

            for($i = 1; $i <= 12; $i++){
                if ($type == 'avg') {
                    $data[] = floatval(DB::table($table)->whereMonth($cause, $i)->whereYear($cause, $year)->avg($raw));
                } elseif ($type == 'sum') {
                    $data[] = floatval(DB::table($table)->whereMonth($cause, $i)->whereYear($cause, $year)->sum($raw));
                } elseif ($type == 'count') {
                    $data[] = DB::table($table)->whereMonth($cause, $i)->whereYear($cause, $year)->count($raw);
                }
            }
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());
        }

        return $data;
    }
}