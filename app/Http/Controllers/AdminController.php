<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AdminController extends Controller
{
    public function TambahUser(){
        $divisi = DB::table('d_divisi')
                ->where('status', 1)
                ->get();

        $jabatan = DB::table('d_jabatan')
                ->where('status', 1)
                ->get();           

        return view('admin.tambahuser', ['divisi' => $divisi, 'jabatan' => $jabatan]);
    }

    public function DaftarUser(){
        $daftaruser = DB::table('users')
                    ->get();

        return view('admin.daftaruser', ['daftaruser' => $daftaruser]);
    }
}
