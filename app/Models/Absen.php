<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    protected $table = "absens";
    protected $fillable = ['id_peserta', 'tgl_absen', 'jam_absen'];
    // protected $guarded = [];
}
