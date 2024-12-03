<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = 'form';
    protected $fillable = ['email', 'nama', 'jabatan', 'instansi', 'nomor_telepon', 'jenis_layanan', 'pilih_layanan', 'tanggal', 'waktu', 'permasalahan', 'link', 'file'];
}
