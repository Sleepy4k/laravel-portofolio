<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Services\ContactService;
use App\Http\Requests\Contact\StoreRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Services\ContactService  $service
     * @return \Inertia\Response
     */
    public function index(ContactService $service)
    {
        return Inertia::render('Contact/Index', $service->index());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Portofolio\StoreRequest  $request
     * @param  \App\Services\ContactService  $service
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, ContactService $service)
    {
        return $service->store($request->validated()) ? to_route('landing.index') : back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Services\ContactService  $service
     * @param  int  $id
     * @return \Inertia\Response
     */
    public function show(ContactService $service, $id)
    {
        return Inertia::render('Contact/Show', $service->show($id));
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
