<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->account_id);
        
        return view('update-profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'account_id' => ['required', 'exists:users'],
            'gender_id' => ['required', 'exists:genders'],
            'first_name' => ['required', 'string', 'max:25', 'alpha'],
            'last_name' => ['required', 'string', 'max:25', 'alpha'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'display_picture_link' => ['required', 'mimes:jpeg, jpg, png'],
        ]);

        $imageName = str_replace(' ', '-', $request->first_name) . '-' . str_replace(' ', '-',  $request->last_name);
        $imagePath = $request->file('picture')->store('/public/images/users/' . $imageName);
        $imagePath = str_replace('public/', '', $imagePath);

        $account = User::find($request->account_id);
        $account->gender_id = $request->gender_id;
        $account->first_name = $request->first_name;
        $account->last_name = $request->last_name;
        $account->email = $request->email;
        $account->display_picture_link = $imagePath;
        $account->save();

        return view('profile-saved');
    }
}
