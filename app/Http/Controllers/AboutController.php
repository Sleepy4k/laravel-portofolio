<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Services\AboutService;
use App\Http\Requests\About\StoreRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Services\AboutService  $service
     * @return \Inertia\Response
     */
    public function index(AboutService $service)
    {
        return Inertia::render('About/Index', $service->index());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Services\AboutService  $service
     * @return \Inertia\Response
     */
    public function create(AboutService $service)
    {
        return Inertia::render('About/Create', $service->create());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\About\StoreRequest  $request
     * @param  \App\Services\AboutService  $service
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, AboutService $service)
    {
        return $service->store($request->validated()) ? to_route('about.index') : back();
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
