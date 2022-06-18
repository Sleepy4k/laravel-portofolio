<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            $title = "Beranda"
        ];

        return view("page/index", compact("data"));
    }
}