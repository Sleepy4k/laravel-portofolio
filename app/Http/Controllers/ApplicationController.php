<?php

namespace App\Http\Controllers;

use App\Services\Web\System\ApplicationService;
use App\Http\Requests\Web\System\Application\StoreRequest;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Services\Web\System\ApplicationService  $service
     * @return \Illuminate\Http\Response
     */
    public function index(ApplicationService $service)
    {
        try {
            return view($this->indexView, $service->index());
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Services\Web\System\ApplicationService  $service
     * @return \Illuminate\Http\Response
     */
    public function create(ApplicationService $service)
    {
        try {
            return view($this->createView, $service->create());
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Web\System\Application\StoreRequest  $request
     * @param  \App\Services\Web\System\ApplicationService  $service
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, ApplicationService $service)
    {
        try {
            return $service->store($request->validated()) ? to_route($this->routeName) : back();
        } catch (\Throwable $th) {
            return $this->redirectError($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort(404);
    }
}
