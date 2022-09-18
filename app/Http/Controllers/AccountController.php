<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function show(User $account)
    {
        return view('account.profile', compact('account'));
    }

    public function photoProfile(Request $request, User $account)
    {
        $validator = Validator::make($request->all(), [
        'photo' => 'nullable|file|image|max:5120'
        ]);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('storage/profile'), $filename);
            $update = $filename;
        }
        $account->update($validator->validate());

        

        return to_route('account.profile', $account);
    }

    public function edit(User $account)
    {
        return view('account.edit', compact('account'));
    }

    public function update(Request $request, User $account)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required',
            'gender' => 'required',
            'phone_number' => 'nullable',
            'address' => 'nullable',
            // 'photo' => 'nullable|file|image|max:5120'
        ]);
        $account->update($validator->validate());

        return to_route('account.profile.edit', $account)->with('success', 'Profil pengguna berhasil diubah!');
    }
}
