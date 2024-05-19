<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
     protected $table = 'pegawai';
     protected $primaryKey = "id";
     protected $fillable = [
     'no_identitas','nama_member', 'alamat', 'no_hp','user_id'
     ];
     public $timestamps = true;

}
