<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PosyanduBalita;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Models\Imunisasi;
use App\Models\Vitamin;
use App\Models\Penimbangan;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $users = $user->posyandu;
        $py = PosyanduBalita::where('posyandu_id', $users)->count();
        $imun =  Imunisasi::where('posyandu_id', $users)->count();
        $vtmn =  Vitamin::where('posyandu_id', $users)->count();
        $tmbng =  Penimbangan::where('posyandu_id', $users)->count();
        return view('dashboard', compact('user', 'users', 'py', 'imun', 'vtmn', 'tmbng')); 
    }
}
