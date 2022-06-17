<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function account()
    {
        $user = auth()->user();
        return view('dashboard.admin.admin.account', compact('user'));
    }
    public function updateAccount(Request $request)
    {
        $request->validate(['email'=>'required|email|max:50',
        'name'=>'required|string'
    ]);
        $user_id = auth()->id();
        $user = User::find($user_id);
        $data = $request->all();

        if ($request->has('old_password') && $request->has('new_password')) {
            //check if the old password matches the password in the datbase.
            $hashedPassword = $user->password;
            if (Hash::check($request->old_password, $hashedPassword)) {
                //update the password

                $hashPass = Hash::make($request->new_password);
                $data['password'] = $hashPass;
            } else {
                toastr()->error('The old password does not match the password in our records');
                return back();
            }
        } else {
            toastr()->error('You must enter the old password as well as the new password');
            return back();
        }

        $user->update($data);
        toastr()->success('User account details updated successfully!');
        return back();
    }

    public function logoutAdmin()
    {
        Auth::logout();
        return redirect('/login');
    }
}
