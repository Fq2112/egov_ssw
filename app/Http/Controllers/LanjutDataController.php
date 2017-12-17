<?php

namespace App\Http\Controllers;

use App\mApotek;
use App\mDepoAir;
use App\mPemilik;
use App\mPemohon;
use App\mPerusahaan;
use App\trPerizinanApotik;
use App\trPerizinanDepo;
use App\trPerizinanHama;
use Illuminate\Http\Request;

class LanjutDataController extends Controller
{
    public function cetakakhir($id)
    { setlocale(LC_TIME, 'Indonesian');
        $trapotek=trPerizinanApotik::findOrFail($id);
        $pemilik=mPemilik::findOrFail($trapotek->id_pemilik);
        $apotek=mApotek::findOrFail($trapotek->id_apotek);
        return view('user.cetak.printakhirapotek',compact('trapotek','apotek','pemilik'));
    }

    public function cetakdepo($id)
    {
        setlocale(LC_TIME, 'Indonesian');
        $trapotek=trPerizinanDepo::findOrFail($id);
        $pemilik=mPemohon::findOrFail($trapotek->id_pemohon);
        $apotek=mDepoAir::findOrFail($trapotek->id_depo);
        return view('user.cetak.printakhir',compact('trapotek','apotek','pemilik'));
    }
    public function cetakhama($id)
    {
        setlocale(LC_TIME, 'Indonesian');
        $trapotek=trPerizinanHama::findOrFail($id);
        $pemilik=mPemilik::findOrFail($trapotek->id_pemilik);
        $apotek=mPerusahaan::findOrFail($trapotek->id_apotek);
        return view('user.cetak.printakhir',compact('trapotek','apotek','pemilik'));
    }
}
