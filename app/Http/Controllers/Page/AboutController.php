<?php

namespace App\Http\Controllers\Page;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Traits\FilesTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    use FilesTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::paginate(10);
        $data = [
            $title = "About"
        ];

        return view("page/about", compact("abouts", "data"));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function main()
    {
        $abouts = About::paginate(10);

        return view("admin/about/index", compact("abouts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin/about/add");
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
            "title" => "required|max:255|unique:abouts",
            "name" => "required|max:255",
            "bday" => "required|max:255",
            "phone" => "required|max:255",
            "email" => "required|max:255",
            "bio" => "required",
            "image" => "required|image|mimes:jpg,png,jpeg,svg|max:4092|dimensions:min_width=100,min_height=100"
        ]);

        $input = $request->only("title", "name", "bday", "phone", "email", "bio", "image");

        if ($request->file("image")) {
            $path_dir = "public/images";
            $file = $request->file("image");

            $input["image"] = $this->save_file(
                $path_dir,
                $file->getClientOriginalName(),
            );

            $file->storeAs($path_dir, $input["image"]);
        }

        About::create($input)->save();

        return redirect()->route("about.index")->with("status", "Data berhasil ditambahkan");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view("admin/about/edit", compact("about"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAboutRequest  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "title" => "required|max:255",
            "name" => "required|max:255",
            "bday" => "required|max:255",
            "phone" => "required|max:255",
            "email" => "required|max:255",
            "bio" => "required",
            "image" => "image|mimes:jpg,png,jpeg,svg|max:4092|dimensions:min_width=100,min_height=100"
        ]);

        $input = $request->only("title", "name", "bday", "phone", "email", "bio", "image");

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

        About::findOrFail($id)->update($input)->save();

        return redirect()->route("about.index")->with("status", "Data berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        $path = public_path("storage/images/".$about->image);
        File::delete($path);

        return redirect()->back();
    }
}