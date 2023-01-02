<?php

namespace App\Repositories\Models;

use App\Traits\SystemLog;
use App\Traits\UploadFile;
use App\Models\Application;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\EloquentRepository;
use App\Contracts\Models\ApplicationInterface;

class ApplicationRepository extends EloquentRepository implements ApplicationInterface
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
    public function __construct(Application $model)
    {
        $this->model = $model;
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

            if (array_key_exists('app_icon', $payload)) {
                $payload['app_icon'] = $this->updateSingleFile('image', $payload['app_icon'], $model->app_icon);
            }

            return $model->update($payload);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Find model by id.
     *
     * @param  int  $modelId
     * @param  array  $columns
     * @param  array  $relations
     * @param  array  $appends
     * @return Model
     */
    public function findById(int $modelId, array $columns = ['*'], array $relations = [], array $appends = []): ?Model
    {
        try {
            return Cache::remember('application.' . $modelId, now()->addDays(rand(1, 2)), function () use ($modelId) {
                return $this->model->findOrFail($modelId);
            });
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());

            return false;
        }
    }
}
