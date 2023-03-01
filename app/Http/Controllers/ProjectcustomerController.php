<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Projectcustomer;
use App\Models\Customer;
use App\Models\jenisrequest;
use App\Models\NamaProject;
use Illuminate\Http\Request;
use Validator;

class ProjectcustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p_customer = Projectcustomer::All();
        $p_customer = Projectcustomer::orderBy('id', 'desc')->get();
        return view('admin.projectcustomer.index', compact('p_customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = Customer::all();
        $jenisrequest = jenisrequest::all();

        return view('admin.projectcustomer.create', compact('customer','jenisrequest'));
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
            'id_customer' => 'required', 'string', 'max:255',
            'id_jenisrequest' => 'required',
            'nama_project'=>'required',
        ];
        $messages = [
            'id_customer.required' => 'id_customer harus di isi!',
            'id_jenisrequest.required' => 'id_jenisrequest harus di isi!',
            'nama_project.required' => 'nama_project harus di isi!',

        ];
        // //     $validation = Validator::make($request->all(), $rules, $messages);
        // // if ($validation->fails()) {
        // //     Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
        // //     return back()->withErrors($validation)->withInput();
        // }

       $p_customer = new ProjectCustomer();
       $p_customer->id_customer = $request->id_customer;
       $p_customer->id_jenisrequest = $request->id_jenisrequest;
       $p_customer->nama_project =$request->nama_project;
       $p_customer->save();
       // $ticketings->detail()->sync($request->detail);
       Alert::success('Done', 'Data berhasil ditambah')->autoClose(2000);
       return redirect()->route('projectcustomer.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projectcustomer  $p_customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p_customer =  Projectcustomer::findOrFail($id);
        $customer = Customer::all();
        return view('admin.projectcustomer.show', compact('p_customer','p_customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projectcustomer  $p_customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p_customer =  Projectcustomer::findOrFail($id);
        $customer = Customer::all();
        $jenisrequest = jenisrequest::all();
        return view('admin.projectcustomer.edit', compact('p_customer','customer', 'jenisrequest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projectcustomer  $p_customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'id_customer' => 'required', 'string', 'max:255',
            'id_jenisrequest' => 'required',
            'nama_project' => 'required',
        ];
        $messages = [
            'id_customer.required' => 'id_customer harus di isi!',
            'id_jenisrequest.required' => 'id_jenisrequest harus di isi!',
            'nama_project.required' => 'nama_project harus di isi!',

        ];
        // //     $validation = Validator::make($request->all(), $rules, $messages);
        // // if ($validation->fails()) {
        // //     Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
        // //     return back()->withErrors($validation)->withInput();
        // }

       $p_customer = ProjectCustomer::findOrFail($id);
       $p_customer->id_customer = $request->id_customer;
       $p_customer->id_jenisrequest = $request->id_jenisrequest;
       $p_customer->nama_project =$request->nama_project;
       $p_customer->save();
        // $ticketings->detail()->sync($request->detail);
        return redirect()->route('priority.index')->with('success','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projectcustomer  $p_customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p_customers = Projectcustomer::findOrFail($id);
        $p_customers->delete();
        // $p_customers->casting()->detach();

        Alert::success('Done', 'Data berhasil dihapus')->autoClose(2000);
        return redirect()->route('projectcustomer.index');
    }
}
