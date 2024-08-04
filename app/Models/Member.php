<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
     protected $table = 'member';
     protected $primaryKey = "id";
     protected $fillable = [
     'no_identitas','nama_member', 'alamat', 'no_hp','user_id'
     ];
     public $timestamps = true;

     public function users()
     {
     return $this->hasOne('App\Models\User', 'user_id');
     }
}
