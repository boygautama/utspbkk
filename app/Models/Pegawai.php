<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_pegawai', 'alamat', 'no_hp', 'user_id'
    ];
    public $timestamps = true;

    public function users()
    {
        return $this->hasOne('App\Models\User', 'id','user_id');
    }
}
