<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Services\TranslateService;
use App\Http\Requests\Translate\StoreRequest;
use App\Http\Requests\Translate\UpdateRequest;

class TranslateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Services\TranslateService  $service
     * @return \Illuminate\Http\Response
     */
    public function index(TranslateService $service)
    {
        return Inertia::render('Translate/Index', $service->index());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Services\TranslateService  $service
     * @return \Illuminate\Http\Response
     */
    public function create(TranslateService $service)
    {
        return Inertia::render('Translate/Create', $service->create());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Translate\StoreRequest  $request
     * @param  \App\Services\TranslateService  $service
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, TranslateService $service)
    {
        return $service->store($request->validated()) ? to_route('translate.index') : back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Services\TranslateService  $service
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TranslateService $service, $id)
    {
        return Inertia::render('Translate/Edit', $service->edit($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Translate\UpdateRequest  $request
     * @param  \App\Services\TranslateService  $service
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, TranslateService $service, $id)
    {
        return $service->update($request->validated(), $id) ? to_route('translate.index') : back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services\TranslateService  $service
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TranslateService $service, $id)
    {
        return $service->destroy($id) ? to_route('translate.index') : back();
    }
}
