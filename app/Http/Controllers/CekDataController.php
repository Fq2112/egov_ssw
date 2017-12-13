<?php

namespace App\Http\Controllers;

use App\berkasApotek;
use App\DataNik;
use App\District;
use App\mAlatApotik;
use App\mApotek;
use App\mApoteker;
use App\mPemilik;
use App\mPemohon;
use App\Province;
use App\Regency;
use App\trPerizinanApotik;
use App\User;
use App\Village;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CekDataController extends Controller
{
    public function coba()
    {
//        $data=Regency::where('province_id',11)->get();
//        if (is_null($data)){
//            $data[]=array('id'=>'0');
//            return response()->json($data);
//        }

//        return response()->json($data);
    }

    public function carinik(Request $request)
    {
        $data = DataNik::where('nik', $request->id)->first();
        if (is_null($data)) {
            $data[] = array('id' => '0');
            return response()->json($data);
        }

        return response()->json($data);
    }

    public function carikota(Request $request)
    {
        $data = Regency::where('province_id', $request->id)->get();
        if (is_null($data)) {
            $data[] = array('id' => '0');
            return response()->json($data);
        }

        return response()->json($data);
    }

    public function carikecamatan(Request $request)
    {
        $data = District::where('regency_id', $request->id)->get();
        if (is_null($data)) {
            $data[] = array('id' => '0');
            return response()->json($data);
        }

        return response()->json($data);
    }

    public function caridesa(Request $request)
    {
        $data = Village::where('district_id', $request->id)->get();
        if (is_null($data)) {
            $data[] = array('id' => '0');
            return response()->json($data);
        }

        return response()->json($data);
    }

    public function index()
    {
        if (\session('pemohon')) {
            Session::flash('status', 'sebelumnya data pemohon sudah di isi');
            return redirect()->route('apotik.data.tempat');
        }
        return view('cb_ajax.index');
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

        trPerizinanApotik::create($data2);

        $sess2 = trPerizinanApotik::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->first();

        Session::put('pemohon', $sess ['id']);
        Session::put('tr_apotik', $sess2 ['id']);

        return redirect()->route('apotik.data.tempat');
//        return Session::all();
    }


    public function kedua()
    {

        if (\Session::has('apotek')) {
            Session::flash('status', 'sebelumnya data Apotek sudah di isi');
            return redirect()->route('apotik.data.pemilik');
        }
        if (is_null(\session('pemohon'))) {
            Session::flash('status', 'akses tidak ada silakan isi data sebelumnya terlebih dahulu');
            return redirect()->route('apotik.data.pemohon');
        }

        $data1 = Province::all();

        return view('cb_ajax.kedua', compact('data1'));
    }

    public function savekedua(Request $request)
    {
        $data = $request->all();
        $data['kota'] = Regency::find($request->kota)->name;
        $data['provinsi'] = Province::find($request->provinsi)->name;
        $data['kecamatan'] = District::find($request->kecamatan)->name;
        $data['desa'] = Village::find($request->desa)->name;
        mApotek::create($data);

        $sess = mApotek::where('name', $data['name'])->where('phone', $data['phone'])->where('provinsi', $data['provinsi'])->
        where('kota', $data['kota'])->where('kecamatan', $data['kecamatan'])->
        orderBy('id', 'desc')->first();
        trPerizinanApotik::findOrFail(\session('tr_apotik'))->update(['id_apotek' => $sess ['id']]);
        Session::put('apotek', $sess ['id']);
        return redirect()->route('apotik.data.pemilik');

    }

    public function ketiga()
    {
        if (\Session::has('pemilik')) {
            Session::flash('status', 'sebelumnya data Pemilik sudah di isi');
            return redirect()->route('apotik.data.alat');
        }
        if (is_null(\session('apotek'))) {
            Session::flash('status', 'akses tidak ada silakan isi data sebelumnya terlebih dahulu');
            return redirect()->route('apotik.data.tempat');
        }

        return view('cb_ajax.ketiga');
    }

    public function saveketiga(Request $request)
    {
        if (is_null($request->nik)) {
            Session::flash('status', 'Cek NIK terlebih dahulu');
            return back();
        }
        if (!is_null($request)) {
            if ($request->has('asd')) {
                $data = $request->except('asd');
                $data['status'] = 'Pemilik';
            } else {
                $data = $request->all();
                $data['status'] = 'Lainnya';
            }
            mPemilik::create($data);

            $sess = mPemilik::where('name', $data['name'])->where('phone', $data['phone'])->where('kodepos', $data['kodepos'])->
            where('jabatan', $data['jabatan'])->where('npwp', $data['npwp'])->
            orderBy('id', 'desc')->first();

            trPerizinanApotik::findOrFail(\session('tr_apotik'))->update(['id_pemilik' => $sess ['id']]);

            Session::put('pemilik', $sess ['id']);
            return redirect()->route('apotik.data.alat');
        } else {
            Session::flash('status', 'cek data kembali');
            return back();
        }
    }

    public function keempat()
    {
        if (\Session::has('alat')) {
            Session::flash('status', 'sebelumnya data alat sudah di isi');
            return redirect()->route('apotik.data.apoteker');
        }
        if (is_null(\session('pemilik'))) {
            Session::flash('status', 'akses tidak ada silakan isi data sebelumnya terlebih dahulu');
            return redirect()->route('apotik.data.pemilik');
        }
        return view('cb_ajax.keempat');
    }

    public function savekeempat(Request $request)
    {
//        return $request->all();

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Gelas', 'jumlah' => $request->gelasu10, 'ukuran' => 10, 'type' => 1);
        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Gelas', 'jumlah' => $request->gelasu100, 'ukuran' => 100, 'type' => 1);
        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Gelas', 'jumlah' => $request->gelasu250, 'ukuran' => 250, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Benker Gelas', 'jumlah' => $request->bgelas100, 'ukuran' => 100, 'type' => 1);
        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Benker Gelas', 'jumlah' => $request->bgelas500, 'ukuran' => 500, 'type' => 1);
        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Benker Gelas', 'jumlah' => $request->bgelas1000, 'ukuran' => 1000, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Labu Elemeyer', 'jumlah' => $request->labu100, 'ukuran' => 100, 'type' => 1);
        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Labu Elemeyer', 'jumlah' => $request->labu500, 'ukuran' => 500, 'type' => 1);
        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Labu Elemeyer', 'jumlah' => $request->labu1000, 'ukuran' => 1000, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Panci Pengukur', 'jumlah' => $request->panci10, 'ukuran' => 10, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Corong', 'jumlah' => $request->corong6, 'ukuran' => 6, 'type' => 1);
        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Corong', 'jumlah' => $request->corong7, 'ukuran' => 7.5, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Spantel Tanduk', 'jumlah' => $request->spantel, 'ukuran' => null, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Cawan Penguap Bergaris Tengah', 'jumlah' => $request->cawan6, 'ukuran' => 6, 'type' => 1);
        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Cawan Penguap Bergaris Tengah', 'jumlah' => $request->cawan7, 'ukuran' => 7, 'type' => 1);
        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Cawan Penguap Bergaris Tengah', 'jumlah' => $request->cawan8, 'ukuran' => 8, 'type' => 1);
        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Cawan Penguap Bergaris Tengah', 'jumlah' => $request->cawan9, 'ukuran' => 9, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Batang Pengaduk', 'jumlah' => $request->pengaduk, 'ukuran' => null, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Batang Pengaduk', 'jumlah' => $request->pengaduk, 'ukuran' => null, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Pemanas Air', 'jumlah' => $request->pemananas, 'ukuran' => null, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Kompor/Alat pemanas lainnya', 'jumlah' => $request->kompor, 'ukuran' => null, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Panci', 'jumlah' => $request->panci, 'ukuran' => null, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Rak tempat pengeringan alat', 'jumlah' => $request->rak, 'ukuran' => null, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Thermometer berkala 100 C', 'jumlah' => $request->termo, 'ukuran' => null, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Mortir bergaris tengah', 'jumlah' => $request->mortir10, 'ukuran' => 10, 'type' => 1);
        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Mortir bergaris tengah', 'jumlah' => $request->mortir13, 'ukuran' => 13, 'type' => 1);
        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Mortir bergaris tengah', 'jumlah' => $request->mortir16, 'ukuran' => 16, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Timbangan Miligram', 'jumlah' => $request->timbanganmg, 'ukuran' => null, 'type' => 1);

        $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Timbangan Gram', 'jumlah' => $request->timbangang, 'ukuran' => null, 'type' => 1);

        if ($request->has('botol')) {
            $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Botol dalam segala ukuran', 'jumlah' => 1, 'ukuran' => null, 'type' => 2);
        } else {
            $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Botol dalam segala ukuran', 'jumlah' => 0, 'ukuran' => null, 'type' => 2);
        }

        if ($request->has('lemari')) {
            $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Lemari dan rak untuk Penyimpanan Obat yang sesuai kebutuhan',
                'jumlah' => 1, 'ukuran' => null, 'type' => 2);
        } else {
            $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Lemari dan rak untuk Penyimpanan Obat yang sesuai kebutuhan',
                'jumlah' => 0, 'ukuran' => null, 'type' => 2);
        }
        if ($request->has('lemaripendingin')) {
            $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Lemari Pendingin',
                'jumlah' => 1, 'ukuran' => null, 'type' => 2);
        } else {
            $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Lemari Pendingin',
                'jumlah' => 0, 'ukuran' => null, 'type' => 2);
        }
        if ($request->has('lemarinarkotika')) {
            $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Lemari untuk penyimpanan narkotika, psikotropika dan bahan bahaya lainnya',
                'jumlah' => 1, 'ukuran' => null, 'type' => 2);
        } else {
            $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'Lemari untuk penyimpanan narkotika, psikotropika dan bahan bahaya lainnya',
                'jumlah' => 0, 'ukuran' => null, 'type' => 2);
        }

        if ($request->has('fi_iv')) {
            $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'FI edisi IV',
                'jumlah' => 1, 'ukuran' => null, 'type' => 3);
        } else {
            $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'FI edisi IV',
                'jumlah' => 0, 'ukuran' => null, 'type' => 3);
        }
        if ($request->has('iso')) {
            $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'ISO edisi terbaru',
                'jumlah' => 1, 'ukuran' => null, 'type' => 3);
        } else {
            $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'ISO edisi terbaru',
                'jumlah' => 0, 'ukuran' => null, 'type' => 3);
        }
        if ($request->has('uu')) {
            $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'UU narkotika dan psikotropika',
                'jumlah' => 1, 'ukuran' => null, 'type' => 3);
        } else {
            $aar[] = array('pemohon_id' => \session('tr_apotik'), 'name' => 'UU narkotika dan psikotropika',
                'jumlah' => 0, 'ukuran' => null, 'type' => 3);
        }
        mAlatApotik::insert($aar);
        Session::put('alat', true);
        return redirect()->route('apotik.data.apoteker');
    }

    public function kelima()
    {
        if (\Session::has('apoteker')) {
            Session::flash('status', 'sebelumnya data apoteker sudah di isi');
            return redirect()->route('apotik.data.cetak');
        }
        if (is_null(\session('alat'))) {
            Session::flash('status', 'akses tidak ada silakan isi data sebelumnya terlebih dahulu');
            return redirect()->route('apotik.data.alat');
        }

        return view('cb_ajax.kelima');
    }

    public function savekelima(Request $request)
    {
        if (is_null($request->nik)) {
            Session::flash('status', 'Cek NIK terlebih dahulu, ');
            return back();
        }
        $data = $request->all();

        mApoteker::create($data);
        $sess = mApoteker::where('name', $data['name'])->where('no_telf', $data['no_telf'])->where('kodepos', $data['kodepos'])->
        where('pendidikan', $data['pendidikan'])->where('nik', $data['nik'])->
        orderBy('id', 'desc')->first();

        trPerizinanApotik::findOrFail(\session('tr_apotik'))->update(['id_apoteker' => $sess ['id']]);

        Session::put('apoteker', $sess ['id']);
        return redirect()->route('apotik.data.cetak');

    }

    public function keenam()
    {
        if (\Session::has('cetak') &&
            \Session::has('cetakalat') &&
            \Session::has('cetakapoteker') &&
            \Session::has('cetaksarana') &&
            \Session::has('cetakuu') &&
            \Session::has('cetakpermohonan')
        ) {
            Session::flash('status', 'sebelumnya data apoteker sudah di isi');
            return redirect()->route('apotik.data.upload');
        }
        if (is_null(\session('apoteker'))) {
            Session::flash('status', 'akses tidak ada silakan isi data sebelumnya terlebih dahulu');
            return redirect()->route('apotik.data.apoteker');
        }

        return view('cb_ajax.keenam');

    }

//cetak keenam
    public function cetakpermohonan()
    {
        $data = mPemohon::findOrFail(\session('pemohon'));
        Session::put('cetakpermohonan', true);
        $data2 = mApotek::findOrFail(\session('apotek'));
        $data3 = mPemilik::findOrFail(\session('pemilik'));
        return view('cb_ajax.cetak.permohonan', compact('data', 'data2', 'data3'));
    }

    public function cetakalat()
    {
        $data = trPerizinanApotik::findOrFail(\session('tr_apotik'));
        Session::put('cetakalat', true);
        $data2 = mAlatApotik::where('pemohon_id', $data->id)->get();

        return view('cb_ajax.cetak.alat', compact('data', 'data2'));
    }

    public function cetakapoteker()
    {
        $data = mApoteker::findOrFail(\session('apoteker'));
        $data2 = mApotek::findOrFail(\session('apotek'));
        setlocale(LC_TIME, 'Indonesian');
        Session::put('cetakapoteker', true);
        return view('cb_ajax.cetak.apoteker', compact('data', 'data2'));
    }

    public function cetaksarana()
    {

        $data = mPemilik::findOrFail(\session('pemilik'));
        Session::put('cetaksarana', true);
        $data2 = mApotek::findOrFail(\session('apotek'));

        return view('cb_ajax.cetak.sarana', compact('data', 'data2'));

    }

    public function cetakuu()
    {
        $data = mApoteker::findOrFail(\session('apoteker'));
        Session::put('cetakuu', true);
        $data2 = mApotek::findOrFail(\session('apotek'));
        $data3 = mPemohon::findOrFail(\session('pemohon'));

        return view('cb_ajax.cetak.uuapoteker', compact('data', 'data2', 'data3'));
    }

    public function setsessionkeenam()
    {
        Session::put('cetak', true);

        return redirect()->route('apotik.data.upload');
    }

    public function ketujuh()
    {
        if (\Session::has('apoteker') &&
            is_null(\session('cetakalat'))
            || is_null(\session('cetakapoteker')) ||
            is_null(\session('cetaksarana')) ||
            is_null(\session('cetakuu')) ||
            is_null(\session('cetakpermohonan'))
        ) {
            Session::flash('status', 'harap cetak semua berkas terlebih dahulu');
            return redirect()->route('apotik.data.cetak');
        }
        if (\Session::has('upload')) {
            Session::flash('status', 'sebelumnya data cetak sudah dilihat');
            return redirect()->route('apotik.data.konfirmasi');
        }
        if (is_null(\session('cetak'))) {
            Session::flash('status', 'akses tidak ada silakan isi data sebelumnya terlebih dahulu');
            return redirect()->route('apotik.data.cetak');
        }

        return view('cb_ajax.ketujuh');
    }

    public function storagefile(Request $request)
    {
        if ($request->has('file') && $request->has('file2') && $request->has('file3') && $request->has('file4') &&
            $request->has('file5') && $request->has('file6')) {

            if ($request->hasFile('file')) {
                $b = 0;
                foreach ($request->file as $file) {
                    $b = $b + 1;
                    $fillnames2 = md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkasapotek/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasApotek;
                    $berkas->file = $filename;
                    $berkas->apotek_proses_id = \session('tr_apotik');
                    $berkas->status = 1;
                    $berkas->save();
                }
            }
            if ($request->hasFile('file2')) {
                $b = 0;
                foreach ($request->file2 as $file) {
                    $b = $b + 1;
                    $fillnames2 = md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkasapotek/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasApotek;
                    $berkas->file = $filename;
                    $berkas->apotek_proses_id = \session('tr_apotik');
                    $berkas->status = 2;
                    $berkas->save();
                }
            }
            if ($request->hasFile('file3')) {
                $b = 0;
                foreach ($request->file3 as $file) {
                    $b = $b + 1;
                    $fillnames2 = md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkasapotek/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasApotek;
                    $berkas->file = $filename;
                    $berkas->apotek_proses_id = \session('tr_apotik');
                    $berkas->status = 3;
                    $berkas->save();
                }
            }
            if ($request->hasFile('file4')) {
                $b = 0;
                foreach ($request->file4 as $file) {
                    $b = $b + 1;
                    $fillnames2 = md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkasapotek/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasApotek;
                    $berkas->file = $filename;
                    $berkas->apotek_proses_id = \session('tr_apotik');
                    $berkas->status = 4;
                    $berkas->save();
                }
            }
            if ($request->hasFile('file5')) {
                $b = 0;
                foreach ($request->file5 as $file) {
                    $b = $b + 1;
                    $fillnames2 = md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkasapotek/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasApotek;
                    $berkas->file = $filename;
                    $berkas->apotek_proses_id = \session('tr_apotik');
                    $berkas->status = 5;
                    $berkas->save();
                }
            }
            if ($request->hasFile('file6')) {
                $b = 0;
                foreach ($request->file6 as $file) {
                    $b = $b + 1;
                    $fillnames2 = md5($file->getClientOriginalName() . '' . str_random(4) . ' ' . $b);
                    $filename = 'upload/berkasapotek/'
                        . str_slug($fillnames2, '-') . '.' . $file->getClientOriginalExtension();
                    $filesize = $file->getClientSize();
                    $file->storeAs('public', $filename);
                    $berkas = new berkasApotek;
                    $berkas->file = $filename;
                    $berkas->apotek_proses_id = \session('tr_apotik');
                    $berkas->status = 6;
                    $berkas->save();
                }
            }
        } else {
            Session::flash('status', 'isi semua berkas');
            return back();
        }
        Session::put('upload', true);
        return redirect()->route('apotik.data.konfirmasi');
    }

    public function kedelapan()
    {
        if (is_null(\session('upload'))) {
            Session::flash('status', 'akses tidak ada silakan isi data sebelumnya terlebih dahulu');
            return redirect()->route('apotik.data.upload');
        }
        setlocale(LC_TIME, 'Indonesian');
        $data = mPemohon::findOrFail(\session('pemohon'));
        $data2 = mPemohon::findOrFail(\session('pemohon'));
        return view('cb_ajax.kedelapan', compact('data', 'data2'));
    }

    public function selesai()
    {
        if (Session::has('pemohon') &&
            Session::has('tr_apotik') &&
            Session::has('apotek') &&
            Session::has('pemilik') &&
            Session::has('alat') &&
            Session::has('apoteker') &&
            Session::has('cetak') &&
            Session::has('upload')) {
            trPerizinanApotik::findOrFail(\session('tr_apotik'))->update(['tgl_perizinan' => Carbon::now()->toDateString(),
                'status' => 1]);
            Session::forget('pemohon');
            Session::forget('tr_apotik');
            Session::forget('apotek');
            Session::forget('pemilik');
            Session::forget('alat');
            Session::forget('apoteker');
            Session::forget('cetak');
            Session::forget('upload');
            \Session::forget('cetakalat');
            \Session::forget('cetakapoteker');
            \Session::forget('cetaksarana');
            \Session::forget('cetakuu');
            \Session::forget('cetakpermohonan');
            return redirect()->action('User\UserController@showRiwayat');
        }
        else{
            return back();
        }

    }
}
