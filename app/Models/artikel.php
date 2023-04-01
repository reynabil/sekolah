<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class artikel extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $date = ['created_at'];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat(' d F Y');
    }

    public function visitsCounter()
    {
        return visits($this);
    }
    public function visits()
    {
        return visits($this)->relation();
    }

}
