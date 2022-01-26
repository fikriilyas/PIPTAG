<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'laporan_akhir',
        'role',
        'name',
        'email',
        'password',
        'pembimbing',
        'nim',
        'angkatan'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function jurnals()
    {
        return $this->hasMany(Jurnal::class);
    }

    public function pendaftaran()
    {
        return $this->hasOne(Pendaftaran::class,'user_id');
    }
    
    public function hasRole(string $role): bool
    {
        return $this->getAttribute('role') === $role;
    }

    public function hasLaporan(string $role): bool
    {
        return $this->getAttribute('laporan_url');
    }
}
