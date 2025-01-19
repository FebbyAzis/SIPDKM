<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PosyanduBalita;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Models\Penimbangan;

class PenimbanganController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $users = $user->posyandu;
        $py = PosyanduBalita::all();
        $tmbng =  Penimbangan::where('posyandu_id', $users)->orderBy('id', 'desc')->get();
        return view('penimbangan.index', compact('user', 'users', 'py', 'tmbng'));
    }

    public function calculateGizi(Request $request)
    {
        $umur = $request->umur; // Umur dalam bulan
        $berat = $request->berat_badan; // Berat badan dalam kg

        // Contoh data median dan standar deviasi dari WHO (untuk bayi 0-5 tahun)
        $whoData = [
            1 => ['median' => 3.3, 'sd' => 0.5],
            2 => ['median' => 4.5, 'sd' => 0.6],
            3 => ['median' => 5.6, 'sd' => 0.6],
            4 => ['median' => 6.4, 'sd' => 0.7],
            5 => ['median' => 7.0, 'sd' => 0.7],
            6 => ['median' => 7.5, 'sd' => 0.7],
            7 => ['median' => 7.9, 'sd' => 0.7],
            8 => ['median' => 8.3, 'sd' => 0.7],
            9 => ['median' => 8.6, 'sd' => 0.8],
            10 => ['median' => 8.9, 'sd' => 0.8],
            11 => ['median' => 9.2, 'sd' => 0.8],
            12 => ['median' => 9.5, 'sd' => 0.8],
            13 => ['median' => 9.8, 'sd' => 0.8],
            14 => ['median' => 10.1, 'sd' => 0.8],
            15 => ['median' => 10.3, 'sd' => 0.8],
            16 => ['median' => 10.6, 'sd' => 0.9],
            17 => ['median' => 10.8, 'sd' => 0.9],
            18 => ['median' => 11.1, 'sd' => 0.9],
            19 => ['median' => 11.3, 'sd' => 0.9],
            20 => ['median' => 11.5, 'sd' => 0.9],
            21 => ['median' => 11.7, 'sd' => 0.9],
            22 => ['median' => 11.9, 'sd' => 0.9],
            23 => ['median' => 12.1, 'sd' => 0.9],
            24 => ['median' => 12.3, 'sd' => 0.9],
            25 => ['median' => 12.5, 'sd' => 1.0],
            26 => ['median' => 12.7, 'sd' => 1.0],
            27 => ['median' => 12.9, 'sd' => 1.0],
            28 => ['median' => 13.1, 'sd' => 1.0],
            29 => ['median' => 13.3, 'sd' => 1.0],
            30 => ['median' => 13.5, 'sd' => 1.0],
            31 => ['median' => 13.7, 'sd' => 1.0],
            32 => ['median' => 13.9, 'sd' => 1.0],
            33 => ['median' => 14.1, 'sd' => 1.0],
            34 => ['median' => 14.3, 'sd' => 1.1],
            35 => ['median' => 14.5, 'sd' => 1.1],
            36 => ['median' => 14.7, 'sd' => 1.1],
            37 => ['median' => 14.9, 'sd' => 1.1],
            38 => ['median' => 15.1, 'sd' => 1.1],
            39 => ['median' => 15.3, 'sd' => 1.1],
            40 => ['median' => 15.5, 'sd' => 1.1],
            41 => ['median' => 15.7, 'sd' => 1.1],
            42 => ['median' => 15.9, 'sd' => 1.1],
            43 => ['median' => 16.1, 'sd' => 1.1],
            44 => ['median' => 16.3, 'sd' => 1.2],
            45 => ['median' => 16.5, 'sd' => 1.2],
            46 => ['median' => 16.7, 'sd' => 1.2],
            47 => ['median' => 16.9, 'sd' => 1.2],
            48 => ['median' => 17.1, 'sd' => 1.2],
            49 => ['median' => 17.3, 'sd' => 1.2],
            50 => ['median' => 17.5, 'sd' => 1.2],
            51 => ['median' => 17.7, 'sd' => 1.2],
            52 => ['median' => 17.9, 'sd' => 1.2],
            53 => ['median' => 18.1, 'sd' => 1.2],
            54 => ['median' => 18.3, 'sd' => 1.3],
            55 => ['median' => 18.5, 'sd' => 1.3],
            56 => ['median' => 18.7, 'sd' => 1.3],
            57 => ['median' => 18.9, 'sd' => 1.3],
            58 => ['median' => 19.1, 'sd' => 1.3],
            59 => ['median' => 19.3, 'sd' => 1.3],
            60 => ['median' => 19.5, 'sd' => 1.3],
        ];

        // Cek apakah umur tersedia dalam data WHO
        if (!isset($whoData[$umur])) {
            return response()->json(['status' => 'error', 'message' => 'Data WHO tidak tersedia untuk umur ini.']);
        }

        $median = $whoData[$umur]['median'];
        $sd = $whoData[$umur]['sd'];

        // Hitung Z-Score
        $zScore = ($berat - $median) / $sd;

        // Tentukan status gizi berdasarkan Z-Score
        if ($zScore > 3) {
            $statusGizi = 'Obesitas';
        } elseif ($zScore > 2) {
            $statusGizi = 'Berat Badan Lebih';
        } elseif ($zScore >= -2) {
            $statusGizi = 'Gizi Baik';
        } elseif ($zScore >= -3) {
            $statusGizi = 'Gizi Kurang';
        } else {
            $statusGizi = 'Gizi Buruk';
        }

        return response()->json(['status_gizi' => $statusGizi]);
    }

    public function tambah_penimbangan(Request $request)
        {
            $save = new Penimbangan;
        $save->posyandu_id = $request->posyandu_id;
        $save->data_bayi_balita_id = $request->data_bayi_balita_id; 
        $save->tanggal = $request->tanggal; 
        $save->umur = $request->umur; 
        $save->berat_badan = $request->berat_badan; 
        $save->status_gizi = $request->status_gizi; 
        $save->keterangan = $request->keterangan; 
        $save->saran = $request->saran; 
               
     
        $save->save(); 
    
            return redirect()->back()->with('success', 'Data berhasil disimpan!');
        }
}
