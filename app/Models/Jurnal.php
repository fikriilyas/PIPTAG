<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'jurnal'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
