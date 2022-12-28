<?php

namespace App\Repositories\Models;

use App\Models\About;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\EloquentRepository;
use App\Contracts\Models\AboutInterface;

class AboutRepository extends EloquentRepository implements AboutInterface
{
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
}
