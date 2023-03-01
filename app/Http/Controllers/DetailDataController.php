<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class DetailDataController extends Controller
{
    public function index($tanggal_request)
    {
        return $tanggal_request;
    }
 
    public function detaildata()
    {

        return view('detaildata');
       
    }
 
    public function prosesdetail(Request $request)
    {
        $tanggal_request = $request->tanggal_request;
        $tanggal_selesai = $request->tanggal_selesai;
        $nama_pic = $request->nama_pic;
        $deskripsi = $request->deskripsi;
      
        return 'Tanggal Request: '.$tanggal_request."<br>".' Tanggal Selesai: '.$tanggal_selesai.
        "<br>".'Nama PIC: '.$nama_pic."<br>".'Deskripsi: '.$deskripsi;
        return view('prosesdetail');
        
        
    }
    public function tampil(Request $request)
    {
        $tanggal_request = $request->tanggal_request;
        $tanggal_selesai = $request->tanggal_selesai;
        $nama_pic = $request->nama_pic;
        $deskripsi = $request->deskripsi;
      
        return 'Tanggal Request: '.$tanggal_request."<br>".' Tanggal Selesai: '.$tanggal_selesai.
        "<br>".'Nama PIC: '.$nama_pic."<br>".'Deskripsi: '.$deskripsi;
        return view('tampil');
    }
}