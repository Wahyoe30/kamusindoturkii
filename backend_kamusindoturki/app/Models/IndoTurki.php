<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndoTurki extends Model
{
    use HasFactory;
    protected $primaryKey ='id';
    protected $fillable = [
        'kata_indonesia',
        'kata_turki',
        'jenis_kata',
        'contoh_penggunaan',
        'contoh_penggunaan_jerman',
        'keterangan',
    ];
}
