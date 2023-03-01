<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class DetailTicketingController extends Controller
{
    public function input()
    {
        return view('input');
    }
    public function proses(Request $request)
    {
        $this->validate($request,[
            'tanggal_request' => 'required',
            'tanggal_selesai' => 'required',
            'nama_pic' => 'required',
            'deskripsi' => 'required',
        ]);
        return view('proses',['data' => $request]);
    }
    public function tampil(Request $request)
    {
        
        $this->validate($request,[
            'tanggal_request' => 'required',
            'tanggal_selesai' => 'required',
            'nama_pic' => 'required',
            'deskripsi' => 'required',
        ]);
        return view('tampil',['data' => $request]);
    }

}