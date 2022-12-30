<?php

namespace App\Services;

use App\Http\Resources\ProjectCollection;

class ProjectService extends Service
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        return [
            'project' => new ProjectCollection($this->projectInterface->paginate(10))
        ];
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @param $request
     */
    public function create()
    {
        return [];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  array  $request
     * @return array
     */
    public function store($request)
    {
        try {
            $this->projectInterface->create($request);

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return array
     */
    public function show($id)
    {
        return [
            'project' => $this->projectInterface->findById($id)
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return array
     */
    public function edit($id)
    {
        return [
            'project' => $this->projectInterface->findById($id)
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  array  $request
     * @param  int  $id
     * @return array
     */
    public function update($request, $id)
    {
        try {
            $this->projectInterface->update($id, $request);

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return array
     */
    public function destroy($id)
    {
        try {
            $this->projectInterface->deleteById($id);

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
