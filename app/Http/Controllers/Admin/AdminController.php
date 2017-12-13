<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Contact;
use App\Http\Controllers\Controller;
use App\order;
use App\order_recorder;
use App\order_studio;
use App\role;
use App\role_admin;
use App\trPerizinanApotik;
use App\trPerizinanDepo;
use App\trPerizinanHama;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('super_admin')->except(['showEditProfileForm', 'updateAdmin']);
    }

    public function index()
    {
        $c_apotik = trPerizinanApotik::whereraw('created_at = curdate()')->count();
        $c_air = trPerizinanDepo::whereraw('created_at = curdate()')->count();
        $c_hama = trPerizinanHama::whereraw('created_at = curdate()')->count();
        $feedback = Contact::whereraw('created_at = curdate()')->count();
        $feedback_t = Contact::whereraw('created_at = curdate()')->get();
        $member = User::whereraw('created_at = curdate()')->count();
        $notif = $c_apotik + $c_air + $c_hama + $feedback + $member;
        return view('admin.dashboard', compact('c_apotik','c_air', 'c_hama', 'feedback', 'feedback_t', 'member', 'notif'));
    }

    public function showEditProfileForm(Admin $admin)
    {
        $c_apotik = trPerizinanApotik::whereraw('created_at = curdate()')->count();
        $c_air = trPerizinanDepo::whereraw('created_at = curdate()')->count();
        $c_hama = trPerizinanHama::whereraw('created_at = curdate()')->count();
        $feedback = Contact::whereraw('created_at = curdate()')->count();
        $feedback_t = Contact::whereraw('created_at = curdate()')->get();
        $member = User::whereraw('created_at = curdate()')->count();
        $notif = $c_apotik + $c_air + $c_hama + $feedback + $member;
        $admins = Admin::withTrashed()->get();
        $ro = role::all();

        return view('auth.admin.settings', compact('c_apotik', 'ro', 'c_air', 'c_hama', 'feedback', 'feedback_t', 'member', 'notif', 'admins', 'admin'));
    }

    public function updateAdmin(Request $request, Admin $admin)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6',
            'password_confirmation' => 'required|same:new_password',
        ]);
        $input = $request->all();
        $data = Admin::find(auth()->user()->id);
        if (!Hash::check($input['password'], $data->password)) {
            Session::flash('status', 'Your current password is incorrect!');
            return back();
        } else {
            if ($request->hasFile('url')) {
                $old = Storage::files('public/admin');
                if ($old) {
                    Storage::delete('public/admin/' . $admin->url);
                }

                $img = $request->file('url');
                $name = $img->getClientOriginalName();
                if ($request->file('url')->isValid()) {
                    $request->url->storeAs('public/admin', $name);
                    $admin->update([
                        'url' => $name,
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => bcrypt($request->new_password),
                        'address' => $request->address,
                        'education' => $request->education,
                        'skills' => $request->skills,
                        'biography' => $request->biography
                    ]);
                    Session::flash('update_admin', 'Successfully, updated!');
                    return back();
                }
            } else {
                Session::flash('file', 'There`s no any file selected...');
                return back();
            }
        }
        return redirect('admin/dashboard');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function add(Request $request)
    {
        Admin::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $data = Admin::orderBy('id', 'desc')->first();
        role_admin::create(['admin_id' => $data->id, 'role_id' => $request->lastname]);
        Session::flash('add_admin', 'Successfully, add an Admin');
        return back();
    }

    public function TableAdminDelete(Admin $admin)
    {
        $admin->delete();
        Session::flash('ban', 'Successfully, banned!');
        return back();
    }

    public function TableAdminRestore($admin)
    {
        Admin::withTrashed()->find($admin)->restore();
        Session::flash('res', 'Successfully, restored!');
        return back();
    }
}
