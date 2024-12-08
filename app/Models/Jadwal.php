<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';
    protected $fillable = [
        'namamk', 'jenis_mata_kuliah', 'jenis_pertemuan', 'jenis_kelas',
        'kelas', 'sks', 'semester', 'ruang_kuliah', 'dosen_pengampu',
        'koordinator', 'mulai', 'selesai', 'kuota', 'kurikulum', 'hari',
    ];

    public function irs()
    {
        return $this->hasMany(IRS::class, 'id', 'id'); // id_irs di IRS, id di jadwal
    }
}