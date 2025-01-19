<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PosyanduBalita;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Models\Imunisasi;

class ImunisasiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $users = $user->posyandu;
        $py = PosyanduBalita::all();
        $imun =  Imunisasi::where('posyandu_id', $users)->orderBy('id', 'desc')->get();
        return view('imunisasi.index', compact('user', 'users', 'py', 'imun'));
    }

    public function fetchDetail(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required', // Validasi input ID
        ]);

        $data = PosyanduBalita::find($request->id); // Cari data berdasarkan ID

        if ($data) {
            return response()->json($data); // Kirim data dalam format JSON
        }

        return response()->json(['message' => 'Data tidak ditemukan'], 404);
    }

   
        public function tambah_imunisasi(Request $request)
        {
            $save = new Imunisasi;
        $save->posyandu_id = $request->posyandu_id;
        $save->data_bayi_balita_id = $request->data_bayi_balita_id; 
        $save->tanggal = $request->tanggal;
        $save->umur = $request->umur; 
        $save->jenis_imunisasi = implode(', ', $request->jenis_imunisasi);
       
     
        $save->save(); 
    
            return redirect()->back()->with('success', 'Data berhasil disimpan!');
        }

        public function hapus_imunisasi($id)
        {
            $imn = Imunisasi::where('id', $id)->delete();
            return redirect()->back()->with('Successss', 'Data berhasil dihapus!');
        }
}
