<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

interface EloquentInterface
{
    /**
     * Get all models.
     *
     * @param  array  $columns
     * @param  array  $relations
     * @param  array  $wheres
     * @param  string  $orderBy
     * @param  bool  $latest
     * @param  array  $roles
     * @return Collection
     */
    public function all(array $columns = ['*'], array $relations = [], array $wheres = [], string $orderBy = 'created_at', bool $latest = true, array $roles = []): Collection;
    
    /**
     * Get all in pagination models.
     *
     * @param  int  $paginate
     * @param  array  $columns
     * @param  array  $relations
     * @param  array  $wheres
     * @param  string  $orderBy
     * @param  bool  $latest
     * @param  array  $roles
     * @return Collection
     */
    public function paginate(int $paginate = 10, array $columns = ['*'], array $relations = [], array $wheres = [], string $orderBy = 'created_at', bool $latest = true, array $roles = []);

    /**
     * Get all trashed models.
     *
     * @return Collection
     */
    public function allTrashed(): Collection;
    
    /**
     * Find model by id.
     *
     * @param  int  $modelId
     * @param  array  $columns
     * @param  array  $relations
     * @param  array  $appends
     * @return Model
     */
    public function findById(int $modelId, array $columns = ['*'], array $relations = [], array $appends = []): ?Model;
        
    /**
     * Find model by custom id.
     *
     * @param  array  $wheres
     * @param  array  $columns
     * @param  array  $relations
     * @param  array  $appends
     * @return Model
     */
    public function findByCustomId(array $wheres = [], array $columns = ['*'], array $relations = []): ?Model;

    /**
     * Find trashed model by id.
     *
     * @param  int  $modelId
     * @return Model
     */
    public function findTrashedById(int $modelId): ?Model;
    
    /**
     * Find trashed model by custom id.
     *
     * @param  array  $wheres
     * @return Model
     */
    public function findTrashedByCustomId(array $wheres = []): ?Model;

    /**
     * Find only trashed model by id.
     *
     * @param  int  $modelId
     * @return Model
     */
    public function findOnlyTrashedById(int $modelId): ?Model;
    
    /**
     * Find only trashed model by custom id.
     *
     * @param  array  $wheres
     * @return Model
     */
    public function findOnlyTrashedByCustomId(array $wheres = []): ?Model;

    /**
     * Create a model.
     *
     * @param  array  $payload
     * @return Model
     */
    public function create(array $payload): ?Model;
    
    /**
     * Update existing model.
     *
     * @param  int  $modelId
     * @param  array  $payload
     * @return Model
     */
    public function update(int $modelId, array $payload): bool;
    
    /**
     * Delete model by id.
     *
     * @param  int  $modelId
     * @return Model
     */
    public function deleteById(int $modelId): bool;
    
    /**
     * Restore model by id.
     *
     * @param  int  $modelId
     * @return Model
     */
    public function restoreById(int $modelId): bool;
    
    /**
     * Permanently delete model by id.
     *
     * @param  int  $modelId
     * @return Model
     */
    public function permanentlyDeleteById(int $modelId): bool;
}