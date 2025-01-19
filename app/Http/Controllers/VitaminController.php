<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PosyanduBalita;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Models\Vitamin;

class VitaminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $users = $user->posyandu;
        $py = PosyanduBalita::all();
        $vtmn =  Vitamin::where('posyandu_id', $users)->orderBy('id', 'desc')->get();
        return view('vitamin.index', compact('user', 'users', 'py', 'vtmn'));
    }

    public function fetchData(Request $request)
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

   
        public function tambah_vitamin(Request $request)
        {
        $save = new Vitamin;
        $save->posyandu_id = $request->posyandu_id;
        $save->data_bayi_balita_id = $request->data_bayi_balita_id; 
        $save->tanggal = $request->tanggal; 
        $save->umur = $request->umur; 
        $save->jenis_vitamin = $request->jenis_vitamin; 
       
     
        $save->save(); 
    
            return redirect()->back()->with('success', 'Data berhasil disimpan!');
        }

        public function hapus_vitamin($id)
    {
        $vtmn = Vitamin::where('id', $id)->delete();
        return redirect()->back()->with('Successss', 'Data berhasil dihapus!');
    }
}
