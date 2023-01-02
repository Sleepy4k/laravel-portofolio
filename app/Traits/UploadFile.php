<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait UploadFile
{
    use SystemLog;

    /**
     * Set path root when upload file.
     *
     * @var string
     */
    protected $baseDisk = 'public';

    /**
     * Set path root when upload file.
     *
     * @var string
     */
    protected $unkownPath = 'unkown';

    /**
     * Set path image folder when upload image.
     *
     * @var string
     */
    protected $imagePath = 'image';

    /**
     * Set path excel folder when upload image.
     *
     * @var string
     */
    protected $excelPath = 'excel';

    /**
     * Set path pdf folder when upload image.
     *
     * @var string
     */
    protected $pdfPath = 'pdf';

    /**
     * Set path word folder when upload image.
     *
     * @var string
     */
    protected $qrcodePath = 'qrcode';

    /**
     * Set path for storage when upload file.
     *
     * @param string $type
     * @return void
     */
    protected function storageDisk($type)
    {
        try {
            if ($type == 'image') {
                return '/' . $this->baseDisk . '/' . $this->imagePath . '/';
            } elseif ($type == 'excel') {
                return '/' . $this->baseDisk . '/' . $this->excelPath . '/';
            } elseif ($type == 'pdf') {
                return '/' . $this->baseDisk . '/' . $this->pdfPath . '/';
            } elseif ($type == 'qrcode') {
                return '/' . $this->baseDisk . '/' . $this->qrcodePath . '/';
            } else {
                return '/' . $this->baseDisk . '/' . $this->unkownPath . '/';
            }
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());

            return null;
        }
    }

    /**
     * Save file in storage app
     *
     * @param string $type
     * @param mixed $file
     * @return void
     */
    protected function putFile($type, $file)
    {
        try {
            $user = request()->user();
            $clientCode = $user->id . '_' . $user->created_at->format('dmY');
            $fileName = preg_replace('/\s+/', '_', uniqid() . '_' . date('dmY') . '_' . $clientCode . '.' . $file->getClientOriginalExtension());

            if ($this->checkFile($type, $fileName)) {
                return $this->putFile($type, $file);
            }

            $file->storeAs($this->storageDisk($type), $fileName);

            return $fileName;
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());

            return null;
        }
    }

    /**
     * Delete file in storage app
     * 
     * @param string $type
     * @param mixed $file
     * @return void
     */
    protected function deleteFile($type, $file)
    {
        try {
            if ($this->checkFile($type, $file)) {
                Storage::delete($this->storageDisk($type) . $file);

                return true;
            }

            return false;
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());

            return false;
        }
    }

    /**
     * Check file in storage app
     * 
     * @param string $type
     * @param mixed $file
     * @return void
     */
    protected function checkFile($type, $file)
    {
        try {
            if (Storage::exists($this->storageDisk($type) . $file)) {
                return true;
            }

            return false;
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());

            return null;
        }
    }

    /**
     * Save single file to storage app
     * 
     * @param string $type
     * @param mixed $file
     * @return void
     */
    protected function saveSingleFile($type, $file)
    {
        try {
            if (is_null($file)) {
                return null;
            }

            return $this->putFile($type, $file);
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());

            return null;
        }
    }

    /**
     * Update old file with the new one
     * 
     * @param string $type
     * @param mixed $file
     * @param mixed $old_file
     * @return void
     */
    protected function updateSingleFile($type, $file, $old_file)
    {
        try {
            if (is_null($file)) {
                return null;
            }

            if (!$this->checkFile($type, $old_file)) {
                return $this->putFile($type, $file);
            }

            $this->deleteFile($type, $old_file);

            return $this->updateSingleFile($type, $file, $old_file);
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());

            return null;
        }
    }

    /**
     * Save multiple file at once
     * 
     * @param string $type
     * @param mixed $file
     * @return void
     */
    protected function saveMultipleFile($type, $files)
    {
        $data = [];

        try {
            if (is_null($files)) {
                return $data;
            }

            if (!is_array($files)) {
                return $this->putFile($type, $files);
            }

            foreach ($files as $file) {
                $data[] = $this->putFile($type, $file);
            }

            return $data;
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());

            return $data;
        }
    }

    /**
     * Update multiple file at once
     * 
     * @param string $type
     * @param mixed $file
     * @param mixed $old_file
     * @return void
     */
    protected function updateMultipleFile($type, $files, $old_file)
    {
        $data = [];

        try {
            if (is_null($files)) {
                return $data;
            }

            if (!is_array($files)) {
                return $this->putFile($type, $files);
            }

            foreach ($files as $file) {
                if ($this->checkFile($type, $old_file)) {
                    $this->deleteFile($type, $old_file);

                    return $this->updateSingleFile($type, $file, $old_file);
                } else {
                    $data[] = $this->putFile($type, $file);
                }
            }

            return $data;
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());

            return $data;
        }
    }
}
