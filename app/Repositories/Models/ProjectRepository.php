<?php

namespace App\Repositories\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\EloquentRepository;
use App\Contracts\Models\ProjectInterface;

class ProjectRepository extends EloquentRepository implements ProjectInterface
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
    public function __construct(Project $model)
    {
        $this->model = $model;
    }
}
