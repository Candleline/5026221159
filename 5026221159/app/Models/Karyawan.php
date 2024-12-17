<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'kodepegawai';
    public $incrementing = false; // Primary key bukan auto-increment
    protected $fillable = ['kodepegawai', 'namalengkap', 'divisi', 'departemen'];
}
