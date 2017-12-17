<?php

namespace App\Http\Controllers\Admin\Sub;

use App\Contact;
use App\trPerizinanApotik;
use App\trPerizinanDepo;
use App\trPerizinanHama;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SEKRETARISController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $now = Carbon::now();
        $tr_apotek = trPerizinanApotik::all();
        $tr_hama = trPerizinanHama::all();
        $tr_air = trPerizinanDepo::all();
        $tr_subcribe = Contact::all();
        $tr_user = User::all();
        $dtapotek = array();
        $dthama = array();
        $dtair = array();
        $dtsub = array();
        $dtuser = array();
        foreach ($tr_apotek as $ap) {
            $compare = $now->copy()->subDay()->lte($ap->created_at);
            if ($compare == true) {
                $dtapotek [] = array(
                    'id' => $ap->id,
                    'id_admin' => $ap->id_admin,
                    'id_pemohon' => $ap->id_pemohon,
                    'id_pemilik' => $ap->id_pemilik,
                    'id_alat' => $ap->id_alat,
                    'id_apoteker' => $ap->id_apoteker,
                    'id_apotek' => $ap->id_apotek,
                    'user_id' => $ap->user_id,
                    'name' => $ap->name,
                    'no_Hygiene' => $ap->no_Hygiene,
                    'status' => $ap->status,
                    'file_berkas' => $ap->file_berkas,
                    'tgl_perizinan' => $ap->tgl_perizinan, 'tgl' => $ap->created_at);
            }
        }
        $c_apotik = count($dtapotek);

        foreach ($tr_hama as $ha) {
            $compare2 = $now->copy()->subDay()->lte($ha->created_at);
            if ($compare2 == true) {
                $dthama[] = array('id' => $ha->id,
                    'id_admin' => $ha->id_admin,
                    'id_pemohon' => $ha->id_pemohon,
                    'id_perusahaan' => $ha->id_perusahaan,
                    'user_id' => $ha->user_id,
                    'name' => $ha->name,
                    'status' => $ha->status,
                    'file_berkas' => $ha->file_berkas,
                    'tgl' => $ha->created_at);
            }
        }
        $c_hama = count($dthama);

        foreach ($tr_air as $air) {
            $compare2 = $now->copy()->subDay()->lte($air->created_at);
            if ($compare2 == true) {
                $dtair []= array(
                    'id' => $air->id,
                    'user_id' => $air->user_id,
                    'id_admin' => $air->id_admin,
                    'id_pemohon' => $air->id_pemohon,
                    'id_depo' => $air->id_depo,
                    'name' => $air->name,
                    'status' => $air->status,
                    'file_berkas' => $air->file_berkas,
                    'tgl_perizinan' => $air->tgl_perizinan,
                    'created_at' => $air->created_at);
            }
        }
        $c_air = count($dtair);
        foreach ($tr_subcribe as $subc) {
            $compare2 = $now->copy()->subDay()->lte($subc->created_at);
            if ($compare2 == true) {
                $dtsub[] = array(
                    'id' => $subc->id,
                    'name' => $subc->name,
                    'email' => $subc->email,
                    'subject' => $subc->subject,
                    'message' => $subc->message,
                    'created_at' => $subc->created_at,
                );
            }
        }
        $feedback_t = count($dtsub);
        $feedback = count($dtsub);
        foreach ($tr_user as $userr) {
            $compare2 = $now->copy()->subDay()->lte($userr->created_at);
            if ($compare2 == true) {
                $dtuser[] = array(
                    'id' => $userr->id,
                    'ava' => $userr->ava,
                    'name' => $userr->name,
                    'phone' => $userr->phone,
                    'alamat' => $userr->alamat,
                    'pekerjaan' => $userr->pekerjaan,
                    'email' => $userr->email,
                    'password' => $userr->password,
                    'status' => $userr->status,
                    'verifyToken' => $userr->verifyToken,
                    'remember_token' => $userr->remember_token,
                    'created_at' => $userr->created_at
                );
            }
        }
//        dd($dthama,count($dtair),$dtapotek);

        $member = count($dtuser);
        $notif = $c_apotik + $c_air + $c_hama + $feedback + $member;
        return view('admin.sub.sekretaris_dashboard', compact('dtapotek', 'dthama', 'dtair', 'dtsub', 'dtuser','c_apotik', 'c_air', 'c_hama', 'feedback', 'feedback_t', 'member', 'notif', 'role', 'admin'));
    }
}
