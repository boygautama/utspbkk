<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianBarang extends Model
{
    use HasFactory;
    protected $table = 'pembelianbarang';
    protected $primaryKey = "id";
    protected $fillable = [
    'pegawai_id',
    'kode_barang',
    'tanggal',
    'jumlah'
    ];
    public $timestamps = true;
}
