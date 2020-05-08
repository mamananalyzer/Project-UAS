<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'role', 'nik', 'email', 'password', 'jabatan', 'dept', 'npwp', 'grade', 'cabang', 'bulan', 'picture', 'gajipokok', 'makan', 'transport', 'absen'];
}
