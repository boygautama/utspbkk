<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaundryMember extends Model
{
    use HasFactory;
    protected $table = 'datalaundrymember';
    protected $primaryKey = "id";
    protected $fillable = [
    'pegawai_id',
    'member_id',
    'layanan_id',
    'tgl_transaksi',
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
