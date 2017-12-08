<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\order;
use App\trPerizinanApotik;
use App\trPerizinanDepo;
use App\trPerizinanHama;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function showAccountSettings(User $user)
    {
        return view('auth.settings', compact('user'));
    }

    public function updateAccount(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'phone' => 'required|string|max:13',
            'ava' => 'mimes:jpeg,bmp,png',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6',
            'password_confirmation' => 'required|same:new_password',
        ]);
        $input = $request->all();
        $data = User::find(auth()->user()->id);
        if (!Hash::check($input['password'], $data->password)) {
            Session::flash('status', 'Your current password is incorrect!');
            return back();
        }
        else {
            if ($request->hasFile('ava')) {
                $old = Storage::files('public/member');
                if ($old) {
                    Storage::delete('public/member/' . $user->ava);
                }

                $img = $request->file('ava');
                $name = $img->getClientOriginalName();
                if ($request->file('ava')->isValid()) {
                    $request->ava->storeAs('public/member', $name);
                    $user->update([
                        'name' => $request->name,
                        'pekerjaan' => $request->pekerjaan,
                        'alamat' => $request->alamat,
                        'phone' => $request->phone,
                        'ava' => $name,
                        'email' => $request->email,
                        'password' => bcrypt($request->new_password),
                    ]);
                    Session::flash('ok', 'Successfully, updated!');
                    return back();
                }
                elseif ($request->email == $data->email){
                    Session::flash('email', 'This email is already exist!');
                    return back();
                }
            } else {
                Session::flash('ava', 'There`s no any file selected...');
                return back();
            }
        }
        return redirect('/');
    }

    public function showRiwayat()
    {
        $c_apotek = trPerizinanApotik::count();
        $c_air = trPerizinanDepo::count();
        $c_hama = trPerizinanHama::count();
        return view('auth.riwayat',compact('c_apotek','c_air','c_hama'));
    }

    public function printRiwayatApotek()
    {
        return view('user.apotek.print');
    }

    public function printRiwayatDepotAir()
    {
        return view('user.air.print');
    }

    public function printRiwayatHama()
    {
        return view('user.hama.print');
    }
}
