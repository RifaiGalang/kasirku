<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
{
        $data = array(
            'title' => 'Data Transaksi',
            'data_transaksi' => Transaksi::all(),
        );
        return view('kasir.transaksi',$data);
    }
}
