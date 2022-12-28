<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Services\PortofolioService;
use App\Http\Requests\Portofolio\StoreRequest;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Services\PortofolioService  $service
     * @return \Illuminate\Http\Response
     */
    public function index(PortofolioService $service)
    {
        return Inertia::render('Portofolio', $service->index());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Portofolio\StoreRequest  $request
     * @param  \App\Services\PortofolioService  $service
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, PortofolioService $service)
    {
        return $service->store($request->validated()) ? to_route('landing.index') : back();
    }
}
