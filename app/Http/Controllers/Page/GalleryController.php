<?php

namespace App\Http\Controllers\Page;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Traits\FilesTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    use FilesTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::paginate(10);
        $data = [
            $title = "Gallery"
        ];

        return view("page/gallery", compact("galleries", "data"));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function main()
    {
        $galleries = Gallery::paginate(10);

        return view("admin/gallery/index", compact("galleries"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin/gallery/add");
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
            "title" => "required|max:255|unique:galleries",
            "desc" => "required|max:255",
            "link" => "required|max:255",
            "image" => "required|image|mimes:jpg,png,jpeg,svg|max:4092|dimensions:min_width=100,min_height=100",
        ]);

        $input = $request->only("title", "desc", "link", "image");

        if ($request->file("image")) {
            $path_dir = "public/images";
            $file = $request->file("image");

            $input["image"] = $this->save_file(
                $path_dir,
                $file->getClientOriginalName(),
            );

            $file->storeAs($path_dir, $input["image"]);
        }
        
        Gallery::create($input)->save();

        return redirect()->route("gallery.index")->with("status", "Data berhasil ditambahkan");
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

        return view("admin/gallery/edit", compact("gallery"));
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
            "title" => "required|max:255",
            "desc" => "required|max:255",
            "link" => "required|max:255",
            "image" => "image|mimes:jpg,png,jpeg,svg|max:4092|dimensions:min_width=100,min_height=100",
        ]);

        $input = $request->only("title", "desc", "link", "image");

        if ($request->file("image")) {
            $old_path = public_path("storage/images/".$request->oldImg);

            if (File::exists($old_path)) {
                File::delete($old_path);
            };

            $path_dir = "public/images";
            $file = $request->file("image");

            $input["image"] = $this->save_file(
                $path_dir,
                $file->getClientOriginalName(),
            );

            $file->storeAs($path_dir, $input["image"]);
        }

       	$Gallery = Gallery::findOrFail($id);
	$Gallery->update($input);
	$Gallery->save();

        return redirect()->route("gallery.index")->with("status", "Data berhasil ditambahkan");
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

        $path = public_path("storage/images/".$gallery->image);
        File::delete($path);

        return redirect()->back();
    }
}