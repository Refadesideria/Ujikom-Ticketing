<?php

namespace App\Http\Controllers;

use Alert;
// use Validator;
use App\Models\Customer;
use App\Models\Department;
use App\Models\jenisrequest;
use App\Models\Priority;
use App\Models\Ticketing;
use App\Models\Detail;
use Illuminate\Http\Request;

class TicketingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticketings = Ticketing::All();
        $ticketings = Ticketing::orderBy('id', 'desc')->get();
        return view('admin.ticketing.index', compact('ticketings'));
    }

    public function create()
    {
        $jenisrequest = jenisrequest::all();
        $customer = Customer::all();
        $priority = Priority::all();
        $department = Department::all();
        return view('admin.ticketing.create', compact('jenisrequest', 'customer', 'priority', 'department'));
    }

    public function store(Request $request)
    {
        $rules = [
            'id_jenisrequest' => 'required', 'string', 'max:255',
            'id_customer' => 'required', 'string', 'max:255',
            // 'cover' => 'required',
            'nama_subject' => 'required',
            'id_department' => 'required',
            'nama_stat' => 'required',
            'id_priority' => 'required',
           

        ];
        $messages = [
            // 'id_jenisrequest.required' => 'id_jenisrequest harus di isi!',
            'id_customer.required' => 'id_customer harus di isi!',
            // 'cover.required' => 'cover harus di isi !',
            'nama_subject.required' => 'nama_subject harus di isi!',
            'id_department.required' => 'id_department harus di isi!',
            'nama_stat.required' => 'nama_stat harus di isi!',
            'id_priority.required' => ' id_priority harus di isi!',
            'id_jenisrequest.required' => ' id_jenisrequest harus di isi!',
          
        ];

        // $validation = Validator::make($request->all(), $rules, $messages);
        // if ($validation->fails()) {
        //     Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
        //     return back()->withErrors($validation)->withInput();
        // }

        $ticketings = new Ticketing();
        $ticketings->nama_subject = $request->nama_subject;
        $ticketings->nama_stat = $request->nama_stat;
        $ticketings->id_customer = $request->id_customer;
        $ticketings->id_department = $request->id_department;
        $ticketings->id_priority = $request->id_priority;
        $ticketings->id_jenisrequest = $request->id_jenisrequest;
       

        $ticketings->save();
        // $ticketings->detail()->attach($request->detail);
        Alert::success('Done', 'Data berhasil dibuat')->autoClose(2000);
        return redirect()->route('ticketing.index');

    }

    public function show($id)
    {
        $ticketings = Ticketing::findOrFail($id);

        $jenisrequest = jenisrequest::all();
        $customer = Customer::all();
        $priority = Priority::all();
        $department = Department::all();
        return view('admin.ticketing.show', compact('ticketings','jenisrequest','customer','priority','department'));
    }


    public function edit($id)
    {
        $ticketings =  Ticketing::findOrFail($id);
        $jenisrequest = jenisrequest::all();
        $customer = Customer::all();
        $priority = Priority::all();
        $department = Department::all();
        // $selectCast = Detail::with('ticketing')->pluck('id')->toArray();
        // dd($selectCast);
        return view('admin.ticketing.edit', compact('ticketings', 'jenisrequest', 'customer', 'priority', 'department'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'id_jenisrequest' => 'required', 'string', 'max:255',
            'id_customer' => 'required', 'string', 'max:255',
            'cover' => 'required',
            'nama_subject' => 'required',
            'id_department' => 'required',
            'nama_stat' => 'required',
            'id_priority' => 'required',
          
        ];
        $messages = [
            'id_jenisrequest.required' => 'id_jenisrequest harus di isi!',
            'id_customer.required' => 'id_customer harus di isi!',
            'cover.required' => 'cover harus di isi !',
            'nama_subject.required' => 'nama_subject harus di isi!',
            'id_department.required' => 'id_department harus di isi!',
            'nama_stat.required' => 'nama_stat harus di isi!',
            'id_priority.required' => ' id_priority harus di isi!',
            'id_jenisrequest.required' => ' id_jenisrequest harus di isi!',
         
        ];

        // $validation = Validator::make($request->all(), $rules, $messages);
        // if ($validation->fails()) {
        //     Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
        //     return back()->withErrors($validation)->withInput();
        // }

        $ticketings = Ticketing::findOrFail($id);
        $ticketings->id_jenisrequest = $request->id_jenisrequest;
        $ticketings->nama_subject = $request->nama_subject;
        $ticketings->nama_stat = $request->nama_stat;
        $ticketings->id_customer = $request->id_customer;
        $ticketings->id_department = $request->id_department;
        $ticketings->id_priority = $request->id_priority;
        $ticketings->id_jenisrequest = $request->id_jenisrequest;

        $ticketings->save();
        // $ticketings->detail()->sync($request->detail);
        Alert::success('Done', 'Data berhasil diedit')->autoClose(2000);
        return redirect()->route('ticketing.index');
    }

    public function detaildata()
    {
        $ticketings =  Ticketing::all();
        $jenisrequest = jenisrequest::all();
        $customer = Customer::all();
        $priority = Priority::all();
        $department = Department::all();
        return view('admin.ticketing.detaildata', compact('ticketings','jenisrequest', 'customer', 'priority', 'department'));
    }
  


    public function destroy($id)
    {
        $ticketings = Ticketing::findOrFail($id);
        $ticketings->delete();
        // $ticketings->casting()->detach()
        Alert::success('Done', 'Data berhasil dihapus')->autoClose(2000);
        return redirect()->route('ticketing.index');
    }
}
