<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaundryNonMember extends Model
{
    use HasFactory;
    protected $table = 'datalaundrynonmember';
    protected $primaryKey = "id";
    protected $fillable = [
        'pegawai_id',
        'layanan_id',
        'tgl_transaksi',
        'nama_customer',
        'alamat',
        'no_telp',
        'keterangan',
        'status_laundry',
        'status_pembayaran',
        'lokasi_kirim'
    ];
    public $timestamps = true;

    public function users()
    {
        return $this->hasOne('App\Models\User', 'pegawai_id');
    }

    public function layanan()
    {
        return $this->hasOne('App\Models\Layanan', 'layanan_id');
    }
}
