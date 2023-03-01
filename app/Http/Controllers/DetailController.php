<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Ticketing;
use App\Models\jenisrequest;
use App\Models\Customer;

use Validator;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = Detail::orderBy('id', 'desc')->get();
        $ticketings = Ticketing::all();
        return view('admin.detail.index', compact('detail','ticketings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ticketings = Ticketing::all();
        $detail = Detail::all();
         return view('admin.detail.create',compact('ticketings','detail'));
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
            'id_ticketing' => 'required',
            'tanggal_request' => 'required',
            'tanggal_selesai' => 'required',
            'nama_pic' => 'required',
            'deskripsi' => 'required',

        ];

        $messages = [
            'id_ticketing.required' => 'id_ticketing harus di isi!',
            'tanggal_request.required' => 'tanggal request harus di isi!',
            'tanggal_selesai.required' => 'tanggal selesai harus di isi!',
            'nama_pic.required' => 'nama_pic harus di isi !',
            'deskripsi' => 'deskripsi harus di isi !',
        ];

        // validasi
        // $validation = Validator::make($request->all(), $rules, $messages);

        // $validated = $request->validate([
        //     'kategori' => 'required|unique:detail',
        // ]);

        // if ($validation->fails()) {
        //     Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
        //     return back()->withErrors($validation)->withInput();
        // }

        $detail = new Detail();
      
        $detail->id_ticketing = $request->id_ticketing;
        $detail->tanggal_request = $request->tanggal_request;
        $detail->tanggal_selesai = $request->tanggal_selesai;
        $detail->nama_pic = $request->nama_pic;
        $detail->deskripsi = $request->deskripsi;
        $detail->save();
        Alert::success('Done', 'Data berhasil dibuat')->autoClose(2000);
        return redirect()->route('detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = Detail::findOrFail($id);
        $ticketings = Ticketing::all();
        return view('admin.detail.show', compact('detail','ticketings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // $validated = $request->validate([
        //     'tanggal_request' => 'required|',
        //     'tanggal_selesai' => 'required|',
        //     'nama_pic' => 'required|',
        //     'deskripsi' => 'required|',
        // ]);
        // $detail = Detail::findOrFail($id);
        // $detail->tanggal_request = $request->tanggal_request;
        // $detail->tanggal_selesai = $request->tanggal_selesai;
        // $detail->nama_pic = $request->nama_pic;
        // $detail->deskripsi= $request->deskripsi;

        // $detail->save();
        // Alert::success('Done', 'Data berhasil diedit');
        // return redirect()->route('detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = Detail::findOrFail($id);
        $detail->delete();
        // $ticketings->casting()->detach();

        Alert::success('Done', 'Data berhasil dihapus')->autoClose(2000);
        return redirect()->route('detail.index');
    }
}
