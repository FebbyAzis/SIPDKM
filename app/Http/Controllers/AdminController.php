<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PosyanduBalita;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Models\Vitamin;
use App\Models\Imunisasi;
use App\Models\Penimbangan;

class AdminController extends Controller
{
    public function posyandu_nusa_indah()
    {
        $user = Auth::user();
        $users = $user->role;
        $pyb1 = PosyanduBalita::where('posyandu_id', 1)->orderBy('id', 'desc')->get();
        $tmbng1 = Penimbangan::where('posyandu_id', 1)->orderBy('id', 'desc')->get();
        $imun1 = Imunisasi::where('posyandu_id', 1)->orderBy('id', 'desc')->get();
        $vtmn1 = Vitamin::where('posyandu_id', 1)->orderBy('id', 'desc')->get();
        return view('admin.posyandu_nusa_indah', compact('pyb1', 'tmbng1', 'imun1', 'vtmn1', 'user', 'users'));
    }

    public function posyandu_dahlia()
    {
        $user = Auth::user();
        $users = $user->role;
        $pyb2 = PosyanduBalita::where('posyandu_id', 2)->orderBy('id', 'desc')->get();
        $tmbng2 = Penimbangan::where('posyandu_id', 2)->orderBy('id', 'desc')->get();
        $imun2 = Imunisasi::where('posyandu_id', 2)->orderBy('id', 'desc')->get();
        $vtmn2 = Vitamin::where('posyandu_id', 2)->orderBy('id', 'desc')->get();
        return view('admin.posyandu_dahlia', compact('pyb2', 'tmbng2', 'imun2', 'vtmn2', 'user', 'users'));
    }

    public function posyandu_mawar_merah()
    {
        $user = Auth::user();
        $users = $user->role;
        $pyb3 = PosyanduBalita::where('posyandu_id', 3)->orderBy('id', 'desc')->get();
        $tmbng3 = Penimbangan::where('posyandu_id', 3)->orderBy('id', 'desc')->get();
        $imun3 = Imunisasi::where('posyandu_id', 3)->orderBy('id', 'desc')->get();
        $vtmn3 = Vitamin::where('posyandu_id', 3)->orderBy('id', 'desc')->get();
        return view('admin.posyandu_mawar_merah', compact('pyb3', 'tmbng3', 'imun3', 'vtmn3', 'user', 'users'));
    }

    public function posyandu_melati_putih()
    {
        $user = Auth::user();
        $users = $user->role;
        $pyb4 = PosyanduBalita::where('posyandu_id', 4)->orderBy('id', 'desc')->get();
        $tmbng4 = Penimbangan::where('posyandu_id', 4)->orderBy('id', 'desc')->get();
        $imun4 = Imunisasi::where('posyandu_id', 4)->orderBy('id', 'desc')->get();
        $vtmn4 = Vitamin::where('posyandu_id', 4)->orderBy('id', 'desc')->get();
        return view('admin.posyandu_melati_putih', compact('pyb4', 'tmbng4', 'imun4', 'vtmn4', 'user', 'users'));
    }

    public function posyandu_aster()
    {
        $user = Auth::user();
        $users = $user->role;
        $pyb5 = PosyanduBalita::where('posyandu_id', 5)->orderBy('id', 'desc')->get();
        $tmbng5 = Penimbangan::where('posyandu_id', 5)->orderBy('id', 'desc')->get();
        $imun5 = Imunisasi::where('posyandu_id', 5)->orderBy('id', 'desc')->get();
        $vtmn5 = Vitamin::where('posyandu_id', 5)->orderBy('id', 'desc')->get();
        return view('admin.posyandu_aster', compact('pyb5', 'tmbng5', 'imun5', 'vtmn5', 'user', 'users'));
    }

    public function posyandu_anggrek()
    {
        $user = Auth::user();
        $users = $user->role;
        $pyb6 = PosyanduBalita::where('posyandu_id', 6)->orderBy('id', 'desc')->get();
        $tmbng6 = Penimbangan::where('posyandu_id', 6)->orderBy('id', 'desc')->get();
        $imun6 = Imunisasi::where('posyandu_id', 6)->orderBy('id', 'desc')->get();
        $vtmn6 = Vitamin::where('posyandu_id', 6)->orderBy('id', 'desc')->get();
        return view('admin.posyandu_anggrek', compact('pyb6', 'tmbng6', 'imun6', 'vtmn6', 'user', 'users'));
    }

    public function data_pengguna()
    {
        $userss = Auth::user();
        $users = $userss->role;
        $user = Users::orderBy('id', 'desc')->get();
        return view('admin.data_pengguna', compact('user', 'users', 'userss'));
    }

    public function edit_pengguna(Request $request, $id)
    {

        Users::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'posyandu' => $request->posyandu,           
        ]);

        return redirect()->back()->with('Successs', 'Data berhasil diubah');
    }
}
