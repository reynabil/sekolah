<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sekolah extends Model
{
    use HasFactory;

    protected $guarded =[];

    protected $dates = ['tanggal'];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['tanggal'])
        ->translatedFormat('l, d F Y');
    }

}
