<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginadmin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginadminController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'pass' => 'required',
            'lang' => 'required',
        ]);

        $user = loginadmin::where('user', $request->user)->first();

        if ($user && loginadmin::where($request->pass, $user->pass)) {
            session();
            $matalomba = $request->input('lang');
            if ($matalomba === 'kdbi') {
                return redirect()->route('mainmenukdbi.show');
            } else if ($matalomba === 'edc') {
                return redirect()->route('mainmenu.show');
            } else if ($matalomba === 'spc') {
                return redirect()->route('spc.mainmenu');
            } else if ($matalomba === 'sm') {
                return redirect()->route('sm.mainmenu');
            } else {
                return back()->withErrors(['error' => 'Halaman Lomba Tidak bisa di akses']); 
            }
        } else {
            return back()->withErrors(['error' => 'Username atau password salah.']);
        }
    }
}
