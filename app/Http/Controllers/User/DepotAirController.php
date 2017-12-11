<?php

namespace App\Http\Controllers\User;

use App\berkasDepot;
use App\District;
use App\mDepoAir;
use App\mPemilik;
use App\mPemohon;
use App\Province;
use App\Regency;
use App\trPerizinanApotik;
use App\trPerizinanDepo;
use App\Village;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DepotAirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.air.index');
    }

    public function pertama()
    {

        if (\session('depot_pemohon')) {
            Session::flash('status', 'sebelumnya data pemohon sudah di isi');
            return redirect()->route('depot.data.tempat');
        }
        return view('user.air.pertama');
    }

    public function savepertama(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        mPemohon::create($data);


        $sess = mPemohon::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->first();

        $data2['id_pemohon'] = $sess['id'];
        $data2['user_id'] = Auth::user()->id;
        $data2['name'] = $request->name;

        trPerizinanDepo::create($data2);

        $sess2 = trPerizinanDepo::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->first();

        Session::put('depot_pemohon', $sess ['id']);
        Session::put('depot_tr_apotik', $sess2 ['id']);

        return redirect()->route('depot.data.tempat');
    }

    public function kedua()
    {

        if (\Session::has('depot')) {
            Session::flash('status', 'sebelumnya data Apotek sudah di isi');
            return redirect()->route('depot.data.pemilik');
        }
        if (is_null(\session('depot_pemohon'))) {
            Session::flash('status', 'akses tidak ada silakan isi data sebelumnya terlebih dahulu');
            return redirect()->route('depot.data.pemohon');
        }

        $data1 = Province::all();

        return view('user.air.kedua', compact('data1'));
    }

    public function savekedua(Request $request)
    {

        $data = $request->all();
        $data['kota'] = Regency::find($request->kota)->name;
        $data['provinsi'] = Province::find($request->provinsi)->name;
        $data['kecamatan'] = District::find($request->kecamatan)->name;
        $data['desa'] = Village::find($request->desa)->name;
        mDepoAir::create($data);

        $sess = mDepoAir::where('name', $data['name'])->where('phone', $data['phone'])->where('provinsi', $data['provinsi'])->
        where('kota', $data['kota'])->where('kecamatan', $data['kecamatan'])->
        orderBy('id', 'desc')->first();
        trPerizinanDepo::findOrFail(\session('depot_tr_apotik'))->update(['id_depo' => $sess ['id']]);
        Session::put('depot', $sess ['id']);
        return redirect()->route('depot.data.pemilik');

    }

    public function ketiga()
    {

        if (\Session::has('depot_cetak')) {
            Session::flash('status', 'sebelumnya data Pemilik sudah di isi');
            return redirect()->route('depot.data.upload');
        }
        if (is_null(\session('depot'))) {
            Session::flash('status', 'akses tidak ada silakan isi data sebelumnya terlebih dahulu');
            return redirect()->route('depot.data.tempat');
        }

        return view('user.air.ketiga');
    }

    public function cetakpermohonan(Request $request)
    {
        $data = mPemohon::findOrFail(\session('depot_pemohon'));
        $data2 = mDepoAir::findOrFail(\session('depot'));
        return view('user.air.cetak.permohonan', compact('data', 'data2'));
    }

    public function cetakuu()
    {
        $data = mPemohon::findOrFail(\session('depot_pemohon'));
        $data2 = mDepoAir::findOrFail(\session('depot'));
        return view('user.air.cetak.uuadepot', compact('data', 'data2'));
    }

    public function bersedia()
    {
        $data = mPemohon::findOrFail(\session('depot_pemohon'));
        $data2 = mDepoAir::findOrFail(\session('depot'));
        return view('user.air.cetak.bersedia', compact('data', 'data2'));
    }

    public function setsessionketiga()
    {
        Session::put('depot_cetak', true);

        return redirect()->route('depot.data.upload');
    }

    public function keempat()
    {
//        return Session::all();
        if (\Session::has('depot_upload')) {
            Session::flash('status', 'sebelumnya data cetak sudah di dillihat');
            return redirect()->route('depot.data.konfirmasi');
        }
        if (is_null(\session('depot_cetak'))) {
            Session::flash('status', 'akses tidak ada silakan isi data sebelumnya terlebih dahulu');
            return redirect()->route('depot.data.pemilik');
        }

        return view('user.air.upload');
    }

    public function savekeempat(Request $request)
    {
        if ($request->has('file') && $request->has('file2') && $request->has('file3') && $request->has('file4') &&
            $request->has('file5') && $request->has('file6')) {

            if ($request->hasFile('file')) {
                $b = 0;
                foreach ($request->file as $file) {
                    $b = $b + 1;
                    $fillnames2 = Carbon::now()->format('Y/m/d').'-'.md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkasdepot/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasDepot();
                    $berkas->file = $filename;
                    $berkas->depot_proses_id = \session('depot_tr_apotik');
                    $berkas->status = 1;
                    $berkas->save();
                }
            }
            if ($request->hasFile('file2')) {
                $b = 0;
                foreach ($request->file2 as $file) {
                    $b = $b + 1;
                    $fillnames2 = Carbon::now()->format('Y/m/d').'-'.md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkasdepot/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasDepot();
                    $berkas->file = $filename;
                    $berkas->depot_proses_id = \session('depot_tr_apotik');
                    $berkas->status = 2;
                    $berkas->save();
                }
            }
            if ($request->hasFile('file3')) {
                $b = 0;
                foreach ($request->file3 as $file) {
                    $b = $b + 1;
                    $fillnames2 = Carbon::now()->format('Y/m/d').'-'.md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkasdepot/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasDepot();
                    $berkas->file = $filename;
                    $berkas->depot_proses_id = \session('depot_tr_apotik');
                    $berkas->status = 3;
                    $berkas->save();
                }
            }
            if ($request->hasFile('file4')) {
                $b = 0;
                foreach ($request->file4 as $file) {
                    $b = $b + 1;
                    $fillnames2 = Carbon::now()->format('Y/m/d').'-'.md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkasdepot/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasDepot();
                    $berkas->file = $filename;
                    $berkas->depot_proses_id = \session('depot_tr_apotik');
                    $berkas->status = 4;
                    $berkas->save();
                }
            }
            if ($request->hasFile('file5')) {
                $b = 0;
                foreach ($request->file5 as $file) {
                    $b = $b + 1;
                    $fillnames2 = Carbon::now()->format('Y/m/d').'-'.md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkasdepot/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasDepot();
                    $berkas->file = $filename;
                    $berkas->depot_proses_id = \session('depot_tr_apotik');
                    $berkas->status = 5;
                    $berkas->save();
                }
            }
            if ($request->hasFile('file6')) {
                $b = 0;
                foreach ($request->file6 as $file) {
                    $b = $b + 1;
                    $fillnames2 = Carbon::now()->format('Y/m/d').'-'.md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkasapotek/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasDepot();
                    $berkas->file = $filename;
                    $berkas->depot_proses_id = \session('depot_tr_apotik');
                    $berkas->status = 6;
                    $berkas->save();
                }
            }
        } else {
            Session::flash('status', 'isi semua berkas');
            return back();
        }
        Session::put('depot_upload', true);
        return redirect()->route('depot.data.konfirmasi');
    }

    public function kelima()
    {
//        return Session::all();
        if (is_null(\session('depot_upload'))) {
            Session::flash('status', 'akses tidak ada silakan isi data sebelumnya terlebih dahulu');
            return redirect()->route('depot.data.upload');
        }
        setlocale(LC_TIME, 'Indonesian');
        $data = mPemohon::findOrFail(\session('depot_pemohon'));
        $data2 = mPemohon::findOrFail(\session('depot_pemohon'));
        return view('user.air.kelima', compact('data', 'data2'));
    }

    public function selesai()
    {
        if (Session::has('depot_pemohon') &&
            Session::has('depot_tr_apotik') &&
            Session::has('depot') &&
            Session::has('depot_cetak') &&
            Session::has('depot_upload') ){
            trPerizinanDepo::findOrFail(\session('depot_tr_apotik'))->update(['tgl_perizinan' => Carbon::now()->toDateString(),
                'status' => 1]);
            Session::forget('depot_pemohon');
            Session::forget('depot_tr_apotik');
            Session::forget('depot');
            Session::forget('depot_cetak');
            Session::forget('depot_upload');
            Session::flash('status', 'Pendaftaran berhasil, silakan tunggu konfirmasi');
            return redirect()->action('User\UserController@showRiwayat');
        }
        else{
            return back();}
    }
}
