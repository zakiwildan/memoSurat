<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AdminController extends Controller
{
    public function TambahUser(){
        return view('admin.tambahuser');
    }

    public function DaftarUser(){
        $daftaruser = DB::table('users')
                    ->get();

        return view('admin.daftaruser', ['daftaruser' => $daftaruser]);
    }
}
