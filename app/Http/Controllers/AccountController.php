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
    public function personal(User $account)
    {
        return view('account.personal', compact('account'));
    }

    public function photoProfile(Request $request)
    {
        $photo = new User();

        if ($request->file('photo')) {
            $photo = $request->file('photo');
            $filename = date('YmdHi') . $photo->getClientOriginalName();
            $photo->move(public_path('storage/profile'), $filename);
            $photo['photo'] = $filename;
        }
        $photo->save();

        return to_route('account.profile');
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
