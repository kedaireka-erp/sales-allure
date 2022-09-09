<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{

    public function show(User $account){
        return view('account.detail', compact('account'));
    }

    public function edit(User $account){
        return view('account.edit', compact('account'));
    }

    public function update(Request $request, User $account){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required',
            'gender' => 'required',
        // 'photo' => 'nullable|file|image|max:5120'
    ]);
    $account->update($validator->validate());

        return to_route('account.profile', $account)->with('success', 'Profil pengguna berhasil diubah!');
    }


}
