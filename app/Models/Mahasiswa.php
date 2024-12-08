<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $primaryKey = 'nim';
    protected $table = 'mahasiswa';
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nim',
        'nama',
        'alamat',
        'no_telp',
        'email',
        'angkatan',
        'jalur_masuk',
        'status',
        'ipk',
        'ips',
    ];
    protected $attributes = [
        'status' => 'Belum Her-Registrasi',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function irs()
    {
    return $this->hasMany(Irs::class, 'nim', 'nim');
    }
    public $timestamps = false;

}
