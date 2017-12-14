<?php

namespace App\Http\Controllers;

use App\mPemohon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class EditApotekController extends Controller
{
    public function pertama($kode, $kembali)
    {

        $kunci = Crypt::decryptString($kode);
        Session::put('edit', $kembali);
        if ($kunci == 1) {
            return redirect()->route('apotik.data.pemohon');
        } elseif ($kunci == 2) {
            return redirect()->route('apotik.data.tempat');
        } elseif ($kunci == 3) {
            return redirect()->route('apotik.data.pemilik');
        } elseif ($kunci == 4) {
            return redirect()->route('apotik.data.alat');
        } elseif ($kunci == 5) {
            return redirect()->route('apotik.data.apoteker');
        } elseif ($kunci == 6) {
            return redirect()->route('apotik.data.cetak');
        } elseif ($kunci == 7) {
            return redirect()->route('apotik.data.upload');
        } elseif ($kunci == 8) {
            return redirect()->route('apotik.data.konfirmasi');
        }

    }
}
