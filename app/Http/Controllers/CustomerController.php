<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;
use Str;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customer = Customer::all();
        return view('admin.customer.create', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.index'); return view('customer.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Customer $customer)
    {
        $rules = [
            'nama' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'max:255',
            'no_telp' => 'numeric',
            'tanggal_request' => 'required',
            'tanggal_selesai' => 'required',
            'deskripsi' => 'required',

        ];
        $messages = [
            'name.required' => 'name harus di isi!',
            'email.required' => 'email harus di isi!',
            'no_telp.required' => 'no_telp harus di isi !',
            'tanggal_request.required' => 'tanggal_request harus di isi!',
            'tanggal_selesai.required' => 'tanggal_selesai harus di isi!',
            'deskripsi.required' => 'deskripsi harus di isi !',
            
        ];

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->no_telp = $request->no_telp;
        $customer->tanggal_request = $request->tanggal_request;
        $customer->tanggal_selesai = $request->tanggal_selesai;
        $customer->deskripsi = $request->deskripsi;
        $customer->save();
        return redirect()->route('customer.index')
        ->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $rules = [
            'ussername' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'max:255',
            'no_telp' => 'numeric',
            'tanggal_request' => 'required',
            'tanggal_selesai' => 'required',
            'deskripsi' => 'required',

        ];
        $messages = [
            'ussername.required' => 'ussername harus di isi!',
            'email.required' => 'email harus di isi!',
            'no_telp.required' => 'no_telp harus di isi !',
            'tanggal_request.required' => 'tanggal_request harus di isi!',
            'tanggal_selesai.required' => 'tanggal_selesai harus di isi!',
            'deskripsi.required' => 'deskripsi harus di isi !',
        ];

        // $validation = Validator::make($request->all(), $rules, $messages);
        // if ($validation->fails()) {
        //     Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
        //     return back()->withErrors($validation)->withInput();
        // }

        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->no_telp = $request->no_telp;
        $customer->tanggal_request = $request->tanggal_request;
        $customer->tanggal_selesai = $request->tanggal_selesai;
        $customer->deskripsi = $request->deskripsi;
        $customer->save();
        return redirect()->route('customer.index')
        ->with('success', 'Data berhasil diedit!');
        }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        if (! Customer::destroy($id)) {
            return redirect()->back();
        }
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data deleted successfully",
        ]);
        return redirect()->route('customer.index');

    }
}
