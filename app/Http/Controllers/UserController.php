<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function BuatMemo(){
        return view('users.buatmemo');
    }

    public function PersonalData($nip){
        $user = DB::table('pegawai')
                ->select(
                    'pegawai.nip', 
                    'pegawai.nm_pegawai',
                    'pegawai.tmp_lahir', 
                    'pegawai.tgl_lahir', 
                    'pegawai.jk',
                    'pegawai.agama',
                    'pegawai.alamat',
                    'pegawai.no_telp',
                    'd_divisi.kd_divisi',
                    'd_divisi.nm_divisi',
                    'd_jabatan.kd_jabatan',
                    'd_jabatan.nm_jabatan'
                )
                ->join('d_divisi', 'd_divisi.kd_divisi', 'pegawai.kd_divisi')
                ->join('d_jabatan', 'd_jabatan.kd_jabatan', 'pegawai.kd_jabatan')
                ->where('pegawai.nip', $nip)
                ->get();
        
        $divisi = DB::table('d_divisi')
                ->where('status', '1')
                ->get();

        $jabatan = DB::table('d_jabatan')
                ->where('status', '1')
                ->get();

        return view('users.personaldata', ['user' => $user, 'divisi' => $divisi, 'jabatan' => $jabatan]);
    }
}
