<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PosyanduBalita;

class PosyanduBalitaController extends Controller
{
    public function index()
    {
        $pyb =  PosyanduBalita::orderBy('id', 'desc')->get();

        return view('posyandu_balita.index', compact('pyb'));
    }

    public function tambah_balita(Request $request)
    {
        $save = new PosyanduBalita;
        $save->nama = $request->nama; 
        $save->umur = $request->umur; 
        $save->ttl = $request->ttl; 
        $save->nik_ank_ibu = $request->nik_ank_ibu; 
        $save->alamat = $request->alamat; 
        $save->nama_ortu = $request->nama_ortu; 
        $save->lngkr_lengan = $request->lngkr_lengan; 
        $save->lngkr_kpl = $request->lngkr_kpl; 
        $save->brt_bdn = $request->brt_bdn; 
        $save->pnjng_bdn = $request->pnjng_bdn; 
     
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_balita(Request $request, $id)
    {

        Posyandubalita::where('id', $id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'ttl' => $request->ttl,
            'nik_ank_ibu' => $request->nik_ank_ibu,
            'alamat' => $request->alamat,
            'nama_ortu' => $request->nama_ortu,
            'lngkr_lengan' => $request->lngkr_lengan,
            'lngkr_kpl' => $request->lngkr_kpl,
            'brt_bdn' => $request->brt_bdn,
            'pnjng_bdn' => $request->pnjng_bdn,
                       
        ]);

        return redirect()->back()->with('Successs', 'Data berhasil diubah');
    }
    
    public function hapus_balita($id)
    {
        $pyb = PosyanduBlita::where('id', $id)->delete();
        return redirect()->back()->with('Successss', 'Data berhasil dihapus!');
    }
}
