<?php

namespace App\Services;

use App\Http\Resources\TranslateCollection;

class TranslateService extends Service
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        return [
            'translate' => new TranslateCollection($this->languageInterface->paginate(10))
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
            $this->languageInterface->create($request);

            return true;
        } catch (\Throwable $th) {
            return false;
        }
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
            'translate' => $this->languageInterface->findById($id)
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
            $this->languageInterface->update($id, $request);

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
        $this->languageInterface->deleteById($id);

        return true;
    }
}
