<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'alamat',
        'user_id'
    ];

    public function register()
    {
        return $this->hasMany(Pendaftaran::class);
    }

    public function mhs()
    {
        return $this->belongsTo(User::class);
    }
}
