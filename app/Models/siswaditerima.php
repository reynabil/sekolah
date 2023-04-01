<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class siswaditerima extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pengumumans()
    {
        return $this->belongsTo(Pengumuman::class,'id_judul','id');
    }
   

}
