<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Admin;
use App\Models\Divisi;
use App\Models\Jabatan;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sort_search = null;
        $admin = Admin::leftJoin('divisis','divisis.id','=','admins.id_divisi') 
        ->leftJoin('jabatans','jabatans.id','=','admins.id_jabatan')
        ->leftJoin('kategoris','kategoris.id','=','admins.id_kategori')
        ->leftJoin('jenisrequests','jenisrequests.id','=','admins.id_jenisrequest')
        ->select('admins.*','divisis.name as nama_divisi','jabatans.name as nama_jabatan','kategoris.name as nama_kategori','jenisrequests.name as name')
        ->orderby('id','DESC');
        if (request()->has('search')){
            $admin = $admin->where('name', 'like', '%'.$sort_search.'%');
        }
        $admin = $admin->paginate(10);
        return view('admin.adminticketing.index', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminticketing.create');
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
            'nama_admin' => 'required', 'string', 'max:255',
            'ussername_admin' => 'required', 'string', 'max:255',
            'email' => 'required',
            'password_admin' => 'required',
            'id_unit'=>'required',
            'id_kantor'=>'required',
            'id_divisi'=>'required',
            'id_jabatan'=>'required',
            'id_kategori'=>'required',
            'id_jenisrequest'=>'required',
        ];
        $messages = [
            'nama_admin.required' => 'Nama harus di isi!',
            'ussername_admin.required' => 'Ussername harus di isi!',
            'password_admin.required' => 'password harus di isi!',
            'email.required' => 'email harus di isi!',
            'id_divisi.required' => ' Divisi harus di isi!',
            'id_jabatan.required' => 'Jabatan harus di isi!',
            'id_kategori.required' => ' Kategori harus di isi!',
            'id_jenisrequest.required' => ' Jenis request harus di isi!',
        ];
        //     $validation = Validator::make($request->all(), $rules, $messages);
        // if ($validation->fails()) {
        //     Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
        //     return back()->withErrors($validation)->withInput();
        // }

        $admin = new Admin();
        $admin->nama_admin = $request->nama_admin;
        $admin->ussername_admin = $request->ussername_admin;
        $admin->email = $request->email;
        $admin->password_admin = $request->password_admin;
        $admin->id_divisi = $request->id_divisi;
        $admin->id_jabatan = $request->id_jabatan;
        $admin->id_kategori = $request->id_kategori;
        $admin->id_jenisrequest = $request->id_jenisrequest;
        

        if($admin->save()){
            Alert::success('admin berhasil di tambah');
            return redirect()->route('adminticketing.index');
        }
        else{
            Alert::error('Something went wrong');
            return back();
        }
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::findOrFail(decrypt($id));
        return view('admin.adminticketing.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nama_admin' => 'required', 'string', 'max:255',
            'ussername_admin' => 'required', 'string', 'max:255',
            'email' => 'required',
            'password_admin' => 'required',
            'id_unit'=>'required',
            'id_kantor'=>'required',
            'id_divisi'=>'required',
            'id_jabatan'=>'required',
            'id_kategori'=>'required',
            'id_jenisrequest'=>'required',
        ];
        $messages = [
            'nama_admin.required' => 'Nama harus di isi!',
            'ussername_admin.required' => 'Ussername harus di isi!',
            'email.admin.required' => 'Email harus di isi!',
            'password_admin.required' => 'password harus di isi!',
            'id_unit.required' => 'Unit harus di isi!',
            'id_kantor.required' => 'Kantor harus di isi!',
            'id_divisi.required' => ' Divisi harus di isi!',
            'id_jabatan.required' => 'Jabatan harus di isi!',
            'id_kategori.required' => ' Kategori harus di isi!',
            'id_jenisrequest.required' => ' Jenis request harus di isi!',
        ];
        //     $validation = Validator::make($request->all(), $rules, $messages);
        // if ($validation->fails()) {
        //     Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
        //     return back()->withErrors($validation)->withInput();
        // }

        $admin = Admin::findOrFail($id);
        $admin->nama_admin = $request->nama_admin;
        $admin->ussername_admin = $request->ussername_admin;
        $admin->email = $request->email;
        $admin->password_admin = $request->password_admin;
        $admin->id_divisi = $request->id_divisi;
        $admin->id_jabatan = $request->id_jabatan;
        $admin->id_kategori = $request->id_kategori;
        $admin->id_jenisrequest = $request->id_jenisrequest;
        

        if($admin->save()){
            Alert::success('admin berhasil di update');
            return redirect()->route('adminticketing.index');
        }
        else{
            Alert::error('Something went wrong');
            return back();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = Admin::where('id',$id)->get()->count();

        // if($count > 0){
        //     Alert::error('Data tidak boleh dihapus');
        //     return back();
        // }else{
            $admin = Admin::findOrFail($id);
            $admin->delete();
            Alert::success('admin berhasil dihapus');
            return redirect()->route('adminticketing.index');
    }
}
