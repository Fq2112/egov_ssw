<?php

namespace App\Http\Controllers\User;

use App\berkasHama;
use App\District;
use App\mPemohon;
use App\mPerusahaan;
use App\Province;
use App\Regency;
use App\trPerizinanHama;
use App\Village;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.hama.index');
    }

    public function pertama()
    {
        if (\session('hama_pemohon')) {
            Session::flash('status', 'sebelumnya data pemohon sudah di isi');
            return redirect()->route('hama.data.tempat');
        }
        return view('user.hama.pertama');
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

        trPerizinanHama::create($data2);

        $sess2 = trPerizinanHama::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->first();

        Session::put('hama_pemohon', $sess ['id']);
        Session::put('hama_tr_apotik', $sess2 ['id']);

        return redirect()->route('hama.data.tempat');
    }

    public function kedua()
    {
        Session::all();

        if (Session::has('perusahaan')) {
            Session::flash('status', 'sebelumnya data Perusahaan sudah di isi');
            return redirect()->route('hama.data.pemilik');
        }
        if (is_null(\session('hama_pemohon'))) {
            Session::flash('status', 'akses tidak ada silakan isi data sebelumnya terlebih dahulu');
            return redirect()->route('hama.data.pemohon');
        }

        $data1 = Province::all();

        return view('user.hama.kedua', compact('data1'));
    }

    public function savekedua(Request $request)
    {

        $data = $request->all();
        $data['kota'] = Regency::find($request->kota)->name;
        $data['provinsi'] = Province::find($request->provinsi)->name;
        $data['kecamatan'] = District::find($request->kecamatan)->name;
        $data['desa'] = Village::find($request->desa)->name;
        mPerusahaan::create($data);

        $sess = mPerusahaan::where('name', $data['name'])->where('phone', $data['phone'])->where('provinsi', $data['provinsi'])->
        where('kota', $data['kota'])->where('kecamatan', $data['kecamatan'])->
        orderBy('id', 'desc')->first();
        trPerizinanHama::findOrFail(\session('hama_tr_apotik'))->update(['id_perusahaan' => $sess ['id']]);
        Session::put('perusahaan', $sess ['id']);
        return redirect()->route('hama.data.pemilik');

    }

    public function ketiga()
    {

        if (\Session::has('perusahaan_cetak')) {
            Session::flash('status', 'sebelumnya data Pemilik sudah di isi');
            return redirect()->route('hama.data.upload');
        }
        if (is_null(\session('perusahaan'))) {
            Session::flash('status', 'akses tidak ada silakan isi data sebelumnya terlebih dahulu');
            return redirect()->route('hama.data.tempat');
        }

        return view('user.hama.ketiga');
    }

    public function cetakpermohonan()
    {
        $data = mPemohon::findOrFail(\session('hama_pemohon'));
        $data2 = mPerusahaan::findOrFail(\session('perusahaan'));
        return view('user.hama.cetak.permohonan', compact('data', 'data2'));
    }

    public function setsessionketiga()
    {
        Session::put('hama_cetak', true);

        return redirect()->route('hama.data.upload');
    }

    public function keempat()
    {
//        return Session::all();
        if (\Session::has('hama_upload')) {
            Session::flash('status', 'sebelumnya data cetak sudah di dillihat');
            return redirect()->route('hama.data.konfirmasi');
        }
        if (is_null(\session('hama_cetak'))) {
            Session::flash('status', 'akses tidak ada silakan isi data sebelumnya terlebih dahulu');
            return redirect()->route('hama.data.pemilik');
        }
        return view('user.hama.upload');
    }

    public function savekeempat(Request $request)
    {
        if ($request->has('file') && $request->has('file2') && $request->has('file3') && $request->has('file4') &&
            $request->has('file5') && $request->has('file6')) {

            if ($request->hasFile('file')) {
                $b = 0;
                foreach ($request->file as $file) {
                    $b = $b + 1;
                    $fillnames2 = Carbon::now()->format('Y/m/d') . '-' . md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkashama/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasHama();
                    $berkas->file = $filename;
                    $berkas->hama_proses_id = \session('hama_tr_apotik');
                    $berkas->status = 1;
                    $berkas->save();
                }
            }
            if ($request->hasFile('file2')) {
                $b = 0;
                foreach ($request->file2 as $file) {
                    $b = $b + 1;
                    $fillnames2 = Carbon::now()->format('Y/m/d') . '-' . md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkashama/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasHama();
                    $berkas->file = $filename;
                    $berkas->hama_proses_id = \session('hama_tr_apotik');
                    $berkas->status = 2;
                    $berkas->save();
                }
            }
            if ($request->hasFile('file3')) {
                $b = 0;
                foreach ($request->file3 as $file) {
                    $b = $b + 1;
                    $fillnames2 = Carbon::now()->format('Y/m/d') . '-' . md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkashama/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasHama();
                    $berkas->file = $filename;
                    $berkas->hama_proses_id = \session('hama_tr_apotik');
                    $berkas->status = 3;
                    $berkas->save();
                }
            }
            if ($request->hasFile('file4')) {
                $b = 0;
                foreach ($request->file4 as $file) {
                    $b = $b + 1;
                    $fillnames2 = Carbon::now()->format('Y/m/d') . '-' . md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkashama/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasHama();
                    $berkas->file = $filename;
                    $berkas->hama_proses_id = \session('hama_tr_apotik');
                    $berkas->status = 4;
                    $berkas->save();
                }
            }
            if ($request->hasFile('file5')) {
                $b = 0;
                foreach ($request->file5 as $file) {
                    $b = $b + 1;
                    $fillnames2 = Carbon::now()->format('Y/m/d') . '-' . md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkashama/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasHama();
                    $berkas->file = $filename;
                    $berkas->hama_proses_id = \session('hama_tr_apotik');
                    $berkas->status = 5;
                    $berkas->save();
                }
            }
            if ($request->hasFile('file6')) {
                $b = 0;
                foreach ($request->file6 as $file) {
                    $b = $b + 1;
                    $fillnames2 = Carbon::now()->format('Y/m/d') . '-' . md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkashama/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasHama();
                    $berkas->file = $filename;
                    $berkas->hama_proses_id = \session('hama_tr_apotik');
                    $berkas->status = 6;
                    $berkas->save();
                }
            }
        } else {
            Session::flash('status', 'isi semua berkas');
            return back();
        }
        Session::put('hama_upload', true);
        return redirect()->route('hama.data.konfirmasi');
    }

    public function kelima()
    {
//        return Session::all();
        if (is_null(\session('hama_upload'))) {
            Session::flash('status', 'akses tidak ada silakan isi data sebelumnya terlebih dahulu');
            return redirect()->route('depot.data.upload');
        }
        setlocale(LC_TIME, 'Indonesian');
        $data = mPemohon::findOrFail(\session('hama_pemohon'));
        $data2 = mPemohon::findOrFail(\session('hama_pemohon'));
        return view('user.hama.kelima', compact('data', 'data2'));
    }

    public function selesai()
    {
        if (
            Session::has('hama_pemohon') &&
            Session::has('hama_tr_apotik') &&
            Session::has('perusahaan') &&
            Session::has('hama_cetak') &&
            Session::has('hama_upload')
        ) {
            trPerizinanHama::findOrFail(\session('hama_tr_apotik'))->update(['tgl_perizinan' => Carbon::now()->toDateString(),
                'status' => 1]);
            Session::forget('hama_pemohon') ;
            Session::forget('hama_tr_apotik') ;
            Session::forget('perusahaan') ;
            Session::forget('hama_cetak') ;
            Session::forget('hama_upload');
            Session::flash('status', 'Pendaftaran berhasil, silakan tunggu konfirmasi');
            return redirect()->action('User\UserController@showRiwayat');
        } else {
            Session::flash('status', 'spmething wrong');
            return back();
        }
    }
}
