<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Requestcustomer;
use Illuminate\Http\Request;

class RequestcustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $request = Requestcustomer::all();
        return view('admin.request.index', compact('request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.request.create'); 
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
            'nama_customer' => 'required', 'string', 'max:255',
            'email_customer' => 'required', 'string', 'max:255',
            'notelp_customer' => 'numeric',
            'tanggal_request' => 'required',
            'tanggal_selesai' => 'required',
            'request_perbaikan' => 'required',
            'deskripsi_customer' => 'required',

        ];
        $messages = [
            'nama_customer.required' => 'nama_customer harus di isi!',
            'email.required' => 'email harus di isi!',
            'notelp_customer.required' => 'notelp_customer harus di isi !',
            'tanggal_request' => 'tanggal_request harus di is!',
            'tanggal_selesai' => 'tanggal_selesai harus di isi',
            'request_perbaikan' => 'request_perbaikan harus di isi!',
            'deskripsi_customer' => 'deskripsi_customer harus di isi!',
        ];

        $request = new Requestcustomer();
        $request->nama_customer = $request->nama_customer;
        $request->email_customer = $request->email_customer;
        $request->notelp_customer = $request->notelp_customer;
        $request->tanggal_request = $request->tanggal_request;
        $request->tanggal_selesai = $request->tanggal_selesai;
        $request->request_perbaikan = $request->request_perbaikan;
        $request->deskripsi_customer = $request->deskripsi_customer;
        $request->save();
        return redirect()->route('request.index')
        ->with('success', 'Data berhasil ditambah!');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requestcustomer  $requestcustomer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $request = Requestcustomer::findOrFail($id);
        return view('admin.request.show',compact('request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Requestcustomer  $requestcustomer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $request = Requestcustomer::findOrFail($id);
        return view('admin.request.edit',compact('request'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Requestcustomer  $requestcustomer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $rules = [
            'nama_customer' => 'required', 'string', 'max:255',
            'email_customer' => 'required', 'string', 'max:255',
            'notelp_customer' => 'numeric',
            'tanggal_request' => 'required',
            'tanggal_selesai' => 'required',
            'request_perbaikan' => 'required',
            'deskripsi_customer' => 'required',

        ];
        $messages = [
            'nama_customer.required' => 'nama_customer harus di isi!',
            'email.required' => 'email harus di isi!',
            'notelp_customer.required' => 'notelp_customer harus di isi !',
            'tanggal_request' => 'tanggal_request harus di is!',
            'tanggal_selesai' => 'tanggal_selesai harus di isi',
            'request_perbaikan' => 'request_perbaikan harus di isi!',
            'deskripsi_customer' => 'deskripsi_customer harus di isi!',
        ];

        $request = Requestcustomer::findOrFail($id);
        $request->nama_customer = $request->nama_customer;
        $request->email_customer = $request->email_customer;
        $request->notelp_customer = $request->notelp_customer;
        $request->tanggal_request = $request->tanggal_request;
        $request->tanggal_selesai = $request->tanggal_selesai;
        $request->request_perbaikan = $request->request_perbaikan;
        $request->deskripsi_customer = $request->deskripsi_customer;
        $request->save();
        return redirect()->route('request.index')
        ->with('success', 'Data berhasil diedit!');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Requestcustomer  $requestcustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $request = Requestcustomer::findOrFail($id);
        $request->delete();
        Alert::success('Done', 'Data berhasil dihapus')->autoClose(2000);
        return redirect()->route('request.index');
    }
}
