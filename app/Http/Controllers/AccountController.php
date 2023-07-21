<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        return view('pages.account.index', [
            'title' => 'Akun',
            'active' => 'account',
        ]);
    }

    public function edit()
    {
        return view('pages.account.edit', [
            'title' => 'Edit Akun',
            'active' => 'account',
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
        ]);

        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/account')->with('info', 'Berhasil Memperbarui Akun');
    }
}
