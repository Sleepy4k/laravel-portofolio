<?php

namespace App\Repositories\Models;

use App\Models\Project;
use App\Traits\SystemLog;
use App\Traits\UploadFile;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\EloquentRepository;
use App\Contracts\Models\ProjectInterface;

class ProjectRepository extends EloquentRepository implements ProjectInterface
{
    use UploadFile, SystemLog;

    /**
     * @var Model
     */
    protected $model;

    /**
     * Base respository constructor
     * 
     * @param  Model  $model
     */
    public function __construct(Project $model)
    {
        $this->model = $model;
    }

    /**
     * Create a model.
     *
     * @param  array  $payload
     * @return Model
     */
    public function create(array $payload): ?Model
    {
        try {
            if (array_key_exists('image', $payload)) {
                $payload['image'] = $this->saveSingleFile('image', $payload['image']);
            }

            $model = $this->model->create($payload);

            return $model->fresh();
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());

            return false;
        }
    }

    /**
     * Update existing model.
     *
     * @param  int  $modelId
     * @param  array  $payload
     * @return Model
     */
    public function update(int $modelId, array $payload): bool
    {
        try {
            $model = $this->findById($modelId);

            if (array_key_exists('image', $payload)) {
                $payload['image'] = $this->updateSingleFile('image', $payload['image'], $model->image);
            }

            $this->sendReportLog('error', $payload);
            return $model->update($payload);
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());

            return false;
        }
    }

    /**
     * Delete model by id.
     *
     * @param  int  $modelId
     * @return Model
     */
    public function deleteById(int $modelId): bool
    {
        try {
            $model = $this->findById($modelId);

            if (!empty($model->image)) {
                $this->deleteFile('image', $model->image);
            }

            return $model->delete();
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());

            return false;
        }
    }
}
