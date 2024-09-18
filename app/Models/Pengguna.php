<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    public $table = "pengguna";
    public $primaryKey = "nip";
    public $fillable =array("username", "password", "nama_pengguna");
    public $timestamps = false;
    // protected $table = 'pengguna';
    // const CREATED_AT = null;
    // const UPDATED_AT = null;
    // protected $primaryKey = 'nip';

}
