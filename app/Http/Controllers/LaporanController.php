<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PosyanduBalita;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Models\Vitamin;
use App\Models\Imunisasi;
use App\Models\Penimbangan;

class LaporanController extends Controller
{
    public function laporan()
    {
        return view('laporan.index');
    }

    public function cetak_data_bayi($tglawal, $tglakhir)
    {
        $user = Auth::user();
        $users = $user->posyandu;
        $pyb =  PosyanduBalita::where('posyandu_id', $users)->whereDate('created_at', '>=', $tglawal)
        ->whereDate('created_at', '<=', $tglakhir)->orderBy('id', 'desc')->get();

        return view('laporan.cetak_data_bayi', compact('user', 'users', 'pyb'));
    }

    public function cetak_penimbangan($tglawal, $tglakhir)
    {
        $user = Auth::user();
        $users = $user->posyandu;
        $pyb =  PosyanduBalita::all();
        $tmbng = Penimbangan::where('posyandu_id', $users)->whereDate('created_at', '>=', $tglawal)
        ->whereDate('created_at', '<=', $tglakhir)->orderBy('id', 'desc')->get();

        return view('laporan.cetak_penimbangan', compact('user', 'users', 'pyb', 'tmbng'));
    }

    public function cetak_imunisasi($tglawal, $tglakhir)
    {
        $user = Auth::user();
        $users = $user->posyandu;
        $pyb =  PosyanduBalita::all();
        $imun = Imunisasi::where('posyandu_id', $users)->whereDate('created_at', '>=', $tglawal)
        ->whereDate('created_at', '<=', $tglakhir)->orderBy('id', 'desc')->get();

        return view('laporan.cetak_imunisasi', compact('user', 'users', 'pyb', 'imun'));
    }

    public function cetak_vitamin($tglawal, $tglakhir)
    {
        $user = Auth::user();
        $users = $user->posyandu;
        $pyb =  PosyanduBalita::all();
        $vtmn = Vitamin::where('posyandu_id', $users)->whereDate('created_at', '>=', $tglawal)
        ->whereDate('created_at', '<=', $tglakhir)->orderBy('id', 'desc')->get();

        return view('laporan.cetak_vitamin', compact('user', 'users', 'pyb', 'vtmn'));
    }
}
