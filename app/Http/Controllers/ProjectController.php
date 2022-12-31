<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Services\ProjectService;
use App\Http\Requests\Project\StoreRequest;
use App\Http\Requests\Project\UpdateRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Services\ProjectService  $service
     * @return \Inertia\Response
     */
    public function index(ProjectService $service)
    {
        return Inertia::render('Project/Index', $service->index());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Services\ProjectService  $service
     * @return \Inertia\Response
     */
    public function create(ProjectService $service)
    {
        return Inertia::render('Project/Create', $service->create());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Project\StoreRequest  $request
     * @param  \App\Services\ProjectService  $service
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, ProjectService $service)
    {
        return $service->store($request->validated()) ? to_route('project.index') : back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Services\ProjectService  $service
     * @param  int  $id
     * @return \Inertia\Response
     */
    public function show(ProjectService $service, $id)
    {
        return Inertia::render('Project/Show', $service->show($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Services\ProjectService  $service
     * @param  int  $id
     * @return \Inertia\Response
     */
    public function edit(ProjectService $service, $id)
    {
        return Inertia::render('Project/Edit', $service->edit($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Project\UpdateRequest  $request
     * @param  \App\Services\ProjectService  $service
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, ProjectService $service, $id)
    {
        return $service->update($request->validated(), $id) ? to_route('project.index') : back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services\ProjectService  $service
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectService $service, $id)
    {
        return $service->destroy($id) ? to_route('project.index') : back();
    }
}
