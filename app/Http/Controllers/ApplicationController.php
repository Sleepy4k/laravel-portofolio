<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Services\ApplicationService;
use App\Http\Requests\Application\StoreRequest;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Services\ApplicationService  $service
     * @return \Illuminate\Http\Response
     */
    public function index(ApplicationService $service)
    {
        return Inertia::render('Setting/Index', $service->index());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Services\ApplicationService  $service
     * @return \Illuminate\Http\Response
     */
    public function create(ApplicationService $service)
    {
        return Inertia::render('Setting/Create', $service->create());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Application\StoreRequest  $request
     * @param  \App\Services\ApplicationService  $service
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, ApplicationService $service)
    {
        return $service->store($request->validated()) ? to_route('setting.index') : back();
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
