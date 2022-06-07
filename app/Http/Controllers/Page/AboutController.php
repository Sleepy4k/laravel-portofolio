<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page/about', [
            "title" => "About",
            "nama" => "Apri Pandu Wicaksono",
            "email" => "pandu300478@gmail.com",
            "gambar" => "apri.png"
        ]);
    }
}