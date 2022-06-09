<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Gallery;
use File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::paginate(10);
        return view('page/gallery', [
            "title" => "Gallery",
            "galleries" => $galleries
        ]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function main()
    {
        $galleries = Gallery::paginate(10);
        return view('admin/gallery/index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/gallery/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|unique:galleries',
            'desc' => 'required|max:255',
            'link' => 'required|max:255',
            'image' => 'required|image|mimes:jpg,png,jpeg,svg|max:4092',
        ]);

        $input = $request->only("title", "desc", 'link', "image");

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

        $gallery = Gallery::create($input);
        $gallery->save();

        return redirect()->route('gallery.index')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin/gallery/edit', compact('gallery'));
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
        $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required|max:255',
            'link' => 'required|max:255',
            'image' => 'image|mimes:jpg,png,jpeg,svg|max:4092',
        ]);

        $input = $request->only("title", "desc", 'link', "image");

        if ($request->file('image')) {
            if(File::exists(public_path('storage/images/gallery/'.$request->oldImg))){
                File::delete(public_path('storage/images/gallery/'.$request->oldImg));
            }

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

        $gallery = Gallery::findOrFail($id);
        $gallery->update($input);
        $gallery->save();

        return redirect()->route('gallery.index')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        File::delete(public_path('storage/images/gallery/'.$gallery->image));

        return redirect()->route('gallery.index');
    }
}