<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Services\ContactService;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Services\ContactService  $service
     * @return \Illuminate\Http\Response
     */
    public function index(ContactService $service)
    {
        return Inertia::render('Contact/Index', $service->index());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Services\ContactService  $service
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ContactService $service, $id)
    {
        return Inertia::render('Contact/Show', $service->show($id));
    }
}
