<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function error(){
        return view('error');
    }

    public function welcome(){
        return view('welcome');
    }

public function LoginUser(Request $request)
{
    // Validasi input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Login berhasil, dapatkan ID pengguna
        $user = Auth::id();

        // Anda bisa mendapatkan detail pengguna lain jika diperlukan
        $user = Auth::user();
        $userRole = $user->role;

        // Periksa peran dan arahkan ke halaman yang sesuai
        if ($userRole === 'admin') {
            return redirect()->route('admindashboard')->with('success', 'Welcome Admin!');
        } else {
            return redirect()->route('error')->with('success', 'Welcome User!');
        }
    } else {
        // Login gagal, kembali ke halaman login dengan pesan kesalahan
        return redirect()->route('welcome')->with('error', 'Invalid login credentials');
    }
        }

        public function LogoutUser(Request $request)
        {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('welcome');
        }
}
