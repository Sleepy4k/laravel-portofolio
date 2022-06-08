<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\About;
use File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::paginate(10);
        return view('page/about', [
            "title" => "About",
            "nama" => "Apri Pandu Wicaksono",
            "email" => "pandu300478@gmail.com",
            "gambar" => "apri.png",
            "abouts" => $abouts
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function main()
    {
        $abouts = About::paginate(10);
        return view('admin/about/index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/about/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|unique:galleries',
            'name' => 'required|max:255',
            'bday' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|max:255',
            'bio' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
            'cv' => 'mimes:pdf,word|max:10240',
        ]);

        $input = $request->only("title", "name", 'bday', "phone", "email", "bio", "image", "cv");

        if ($request->file('image')) {
            $path_dir = 'public/images/gallery';
            $image = $request->file('image');

            /** 
             * Use getClientOriginalName() for original file name by user
             * Use uniqid() for name with unique name
             * Use data(xxx) for name with current date
             * Use Str::random(value) for name with random string
             * Use default laravel facade system
            */
            $name = $image->getClientOriginalName();
            $fake_name = Str::random(8);
            $path = $request->file('image')->storeAs($path_dir, $fake_name.' - '.$name);
            
            $input['image'] = $fake_name.' - '.$name;
        }

        if ($request->file('cv')) {
            $path_dir_2 = 'public/files/cv';
            $cv = $request->file('cv');

            /** 
             * Use getClientOriginalName() for original file name by user
             * Use uniqid() for name with unique name
             * Use data(xxx) for name with current date
             * Use Str::random(value) for name with random string
             * Use default laravel facade system
            */
            $name_2 = $cv->getClientOriginalName();
            $fake_name_2 = Str::random(8);
            $path_2 = $request->file('cv')->storeAs($path_dir_2, $fake_name_2.' - '.$name_2);
            
            $input['cv'] = $fake_name.' - '.$name;
        }

        $gallery = About::create($input);
        $gallery->save();

        return redirect()->route('gallery.index')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAboutRequest  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}