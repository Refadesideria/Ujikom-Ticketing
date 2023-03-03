<?php

namespace App\Http\Controllers;

use Alert;
use Session;
use App\Models\jenisrequest;
use Illuminate\Http\Request;

class JenisrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisrequest = jenisrequest::orderBy('id', 'desc')->get();
        return view('admin.jenisrequest.index', compact('jenisrequest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jenisrequest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'kode' => 'required', 'string', 'max:255',
            'name' => 'required', 'string', 'max:255',
            'nama_pic' => 'required',

        ];
        $messages = [
            'kode.required' => 'Kode harus di isi!',
            'name.required' => 'Name harus di isi!',
            'nama_pic.required' => 'harus di isi!',

        ];
        //     $validation = Validator::make($request->all(), $rules, $messages);
        // if ($validation->fails()) {
        //     Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
        //     return back()->withErrors($validation)->withInput();
        // }

        $jenisrequest = new Jenisrequest();
        $jenisrequest->kode = $request->kode;
        $jenisrequest->name = $request->name;
        $jenisrequest->nama_pic = $request->nama_pic;
        

        $jenisrequest->save();
        return redirect()->route('jenisrequest.index')->with('success','Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jenisrequest  $jenisrequest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenisrequest = jenisrequest::findOrFail($id);
        return view('admin.jenisrequest.show',compact('jenisrequest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jenisrequest  $jenisrequest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenisrequest = jenisrequest::findOrFail($id);
        return view('admin.jenisrequest.edit', compact('jenisrequest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jenisrequest  $jenisrequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'kode' => 'required', 'string', 'max:255',
            'name' => 'required', 'string', 'max:255',
            'nama_pic' => 'required',

        ];
        $messages = [
            'kode.required' => 'Kode harus di isi!',
            'name.required' => 'Name harus di isi!',
            'nama_pic.required' => 'harus di isi!',

        ];
        //     $validation = Validator::make($request->all(), $rules, $messages);
        // if ($validation->fails()) {
        //     Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
        //     return back()->withErrors($validation)->withInput();
        // }
        $jenisrequest = Jenisrequest::findOrFail($id);
        $jenisrequest->kode = $request->kode;
        $jenisrequest->name = $request->name;
        $jenisrequest->nama_pic = $request->nama_pic;
        $jenisrequest->save();
        return redirect()->route('jenisrequest.index')->with('success','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jenisrequest  $jenisrequest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Jenisrequest::destroy($id)) {
            return redirect()->back();
        }
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data deleted successfully",
        ]);
    }
}
