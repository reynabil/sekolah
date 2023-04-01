<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class proker extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $date = ['batas_waktu'];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['batas_waktu'])
            ->translatedFormat(' d F Y');
    }
}
