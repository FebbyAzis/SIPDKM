<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PosyanduBalita;
use App\Models\Penimbangan;
use App\Models\Imunisasi;
use App\Models\Vitamin;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;

class PosyanduBalitaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $users = $user->posyandu;
        
        $pyb =  PosyanduBalita::where('posyandu_id', $users)->orderBy('id', 'desc')->get();

        return view('posyandu_balita.index', compact('pyb', 'user', 'users'));
    }

    public function tambah_balita(Request $request)
    {
        $save = new PosyanduBalita;
        $save->posyandu_id = $request->posyandu_id;
        $save->nik_anak = $request->nik_anak; 
        $save->no_kk = $request->no_kk; 
        $save->nama_anak = $request->nama_anak; 
        $save->nama_ibu = $request->nama_ibu; 
        $save->nama_ayah = $request->nama_ayah; 
        $save->anak_ke = $request->anak_ke; 
        $save->jk = $request->jk; 
        $save->umur = $request->umur; 
        $save->ttl = $request->ttl; 
        $save->berat_badan = $request->berat_badan; 
        $save->panjang_badan = $request->panjang_badan; 
        $save->lingkar_lengan = $request->lingkar_lengan; 
        $save->lingkar_kepala = $request->lingkar_kepala; 
        $save->alamat = $request->alamat; 
        $save->no_hp_ortu = $request->no_hp_ortu; 
     
        $save->save(); 
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_balita(Request $request, $id)
    {

        PosyanduBalita::where('id', $id)->update([
           
            'nik_anak' => $request->nik_anak,
            'no_kk' => $request->no_kk,
            'nama_anak' => $request->nama_anak,
            'nama_ibu' => $request->nama_ibu,
            'nama_ayah' => $request->nama_ayah,
            'anak_ke' => $request->anak_ke,
            'jk' => $request->jk,
            'umur' => $request->umur,
            'ttl' => $request->ttl,
            'berat_badan' => $request->berat_badan,
            'panjang_badan' => $request->panjang_badan,
            'lingkar_lengan' => $request->lingkar_lengan,
            'lingkar_kepala' => $request->lingkar_kepala,
            'alamat' => $request->alamat,
            'no_hp_ortu' => $request->no_hp_ortu,
                       
        ]);

        return redirect()->back()->with('Successs', 'Data berhasil diubah');
    }
    
    public function hapus_balita($id)
    {
        $pyb = PosyanduBalita::where('id', $id)->delete();
        return redirect()->back()->with('Successss', 'Data berhasil dihapus!');
    }

    public function detail ($id)
    {
        $pyb = PosyanduBalita::find($id);
        $tmbng = Penimbangan::where('data_bayi_balita_id', $id)->orderBy('id', 'desc')->get();
        $imun = Imunisasi::where('data_bayi_balita_id', $id)->orderBy('id', 'desc')->get();
        $vtmn = Vitamin::where('data_bayi_balita_id', $id)->orderBy('id', 'desc')->get();
        return view('posyandu_balita.detail', compact('pyb', 'tmbng', 'imun', 'vtmn'));
    }

    public function cetak($id)
    {
        $user = Auth::user();
        $users = $user->posyandu;
        $pyb = PosyanduBalita::find($id);
        $tmbng = Penimbangan::where('data_bayi_balita_id', $id)->orderBy('id', 'desc')->get();
        $imun = Imunisasi::where('data_bayi_balita_id', $id)->orderBy('id', 'desc')->get();
        $vtmn = Vitamin::where('data_bayi_balita_id', $id)->orderBy('id', 'desc')->get();
        return view('posyandu_balita.cetak', compact('user', 'users', 'pyb', 'tmbng', 'imun', 'vtmn'));
    }
}
