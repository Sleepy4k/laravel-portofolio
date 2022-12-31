<?php

namespace App\Repositories\Models;

use App\Models\About;
use App\Traits\SystemLog;
use App\Traits\UploadFile;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\EloquentRepository;
use App\Contracts\Models\AboutInterface;

class AboutRepository extends EloquentRepository implements AboutInterface
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
    public function __construct(About $model)
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

            if (array_key_exists('image', $payload)) {
                $payload['image'] = $this->updateSingleFile('image', $payload['image'], $model->image);
            }

            return $model->update($payload);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
