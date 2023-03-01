<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Ticketing;
class PdfController extends Controller
{
    public function generatePdf()
{
    $ticketing = Ticketing::all();
    $pdf = PDF::loadView('print', ['ticketing'=>$ticketing])->setPaper('a4', 'landscape');
    return $pdf->stream();
}

public function laporan(Request $request){
    $start = $request->tanggal_request;
    $end = $request->tanggal_selesai;

    if($end >= $start){
            $ticketing = Ticketing::whereBetween('tanggal_request', [$start, $end])->get();
            $pdf = PDF::loadview('laporan.print', compact('ticketing','start','end'))->setPaper('a4', 'landscape');
            return $pdf->stream('laporan.pdf');
    }
    elseif($end < $start){
        Alert::error('Tanggal yang anda masukkan tidak valid', 'Oops!')->persistent("Ok");
        return redirect()->back();
    }
}

public function singlePrint($id){
    $ticketing = Ticketing::findOrFail($id);
    $pdf = PDF::loadView('singlePrint', ['ticketing'=>$ticketing])->setPaper('a4', 'landscape');
    return $pdf->stream();
}
}
