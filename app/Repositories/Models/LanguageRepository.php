<?php

namespace App\Repositories\Models;

use App\Traits\SystemLog;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\EloquentRepository;
use Spatie\TranslationLoader\LanguageLine;
use App\Contracts\Models\LanguageInterface;

class LanguageRepository extends EloquentRepository implements LanguageInterface
{
    use SystemLog;

    /**
     * @var Model
     */
    protected $model;

    /**
     * Base respository constructor
     * 
     * @param  Model  $model
     */
    public function __construct(LanguageLine $model)
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
            $payload['text'] = [];

            if (array_key_exists('id', $payload) && array_key_exists('en', $payload)) {
                $payload['text'] = [
                    'id' => $payload['id'],
                    'en' => $payload['en']
                ];

                unset($payload['id']);
                unset($payload['en']);
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
            $payload['text'] = [];

            if (array_key_exists('id', $payload) && array_key_exists('en', $payload)) {
                $payload['text'] = [
                    'id' => $payload['id'],
                    'en' => $payload['en']
                ];

                unset($payload['id']);
                unset($payload['en']);
            }

            $model = $this->findById($modelId);

            return $model->update($payload);
        } catch (\Throwable $th) {
            $this->sendReportLog('error', $th->getMessage());

            return false;
        }
    }
}
