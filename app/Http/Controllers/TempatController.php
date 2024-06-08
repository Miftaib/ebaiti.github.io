<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TempatController extends Controller
{
    public function index()
    {
        $tempat = DB::table('tempat')->orderBy('kode_tempat')->get();
        return view('tempat.index', compact('tempat'));
    }


    public function store(Request $request)
    {
        $kode_tempat = $request->kode_tempat;
        $nama_tempat = $request->nama_tempat;
        $lokasi_tempat = $request->lokasi_tempat;
        $radius_tempat = $request->radius_tempat;

        try {
            $data = [
                'kode_tempat' => $kode_tempat,
                'nama_tempat' => $nama_tempat,
                'lokasi_tempat' => $lokasi_tempat,
                'radius_tempat' => $radius_tempat
            ];
            DB::table('tempat')->insert($data);
            return Redirect::back()->with(['success' => 'Data Berhasil Disimpan']);
        } catch (\Exception $e) {
            return Redirect::back()->with(['warning' => 'Data Gagal Disimpan']);
        }
    }

    public function edit(Request $request)
    {
        $kode_tempat = $request->kode_tempat;
        $tempat = DB::table('tempat')->where('kode_tempat', $kode_tempat)->first();
        return view('tempat.edit', compact('tempat'));
    }

    public function update(Request $request)
    {
        $kode_tempat = $request->kode_tempat;
        $nama_tempat = $request->nama_tempat;
        $lokasi_tempat = $request->lokasi_tempat;
        $radius_tempat = $request->radius_tempat;

        try {
            $data = [
                'nama_tempat' => $nama_tempat,
                'lokasi_tempat' => $lokasi_tempat,
                'radius_tempat' => $radius_tempat
            ];
            DB::table('tempat')
                ->where('kode_tempat', $kode_tempat)
                ->update($data);
            return Redirect::back()->with(['success' => 'Data Berhasil Diupdate']);
        } catch (\Exception $e) {
            return Redirect::back()->with(['warning' => 'Data Gagal Diupdate']);
        }
    }

    public function delete($kode_tempat)
    {
        $hapus = DB::table('tempat')->where('kode_tempat', $kode_tempat)->delete();
        if ($hapus) {
            return Redirect::back()->with(['success' => 'Data Berhasil Di Hapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Di Hapus']);
        }
    }
}
