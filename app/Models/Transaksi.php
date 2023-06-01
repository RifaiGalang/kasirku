<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{ 
    use HasFactory;
    protected $table = 'tbl_transaksi';
    protected $fillable = [
        'no_transaksi',
        'barang_id',
        'total_bayar',
        'uang',
        'kembalian',
   
    ];
 
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
