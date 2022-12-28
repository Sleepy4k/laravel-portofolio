<?php

namespace App\Repositories\Models;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\EloquentRepository;
use App\Contracts\Models\ContactInterface;

class ContactRepository extends EloquentRepository implements ContactInterface
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
    public function __construct(Contact $model)
    {
        $this->model = $model;
    }
}
