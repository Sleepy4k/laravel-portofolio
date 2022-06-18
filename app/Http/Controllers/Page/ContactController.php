<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::paginate(10);

        return view("admin/contact/index", compact("contacts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            $title = "Contacts"
        ];

        return view("page/contacts", compact("data"));
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
            "nama" => "required|max:255",
            "email" => "required|max:255|email:dns",
            "pesan" => "required|max:255"
        ]);

        $input = $request->only("nama", "email", "pesan");

        Contact::create($input)->save();

        return redirect()->route("contact.create")->with("status", "Data berhasil ditambahkan");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view("admin/contact/edit", compact("contact"));
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
            "nama" => "required|max:255",
            "email" => "required|max:255|email:dns",
            "pesan" => "required|max:255"
        ]);

        $input = $request->only("nama", "email", "pesan");

        Contact::findOrFail($id)->update($input)->save();

        return redirect()->route("contact.index")->with("status", "Data berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();

        return redirect()->back();
    }
}