<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class kegiatan extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $dates = ['tanggal'];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['tanggal'])
        ->translatedFormat('l, d F Y');
    }
}
