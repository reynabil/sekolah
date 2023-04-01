<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bioalumni extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function alumnis()
    {
        return $this->belongsTo(alumni::class,'alumni','id');
    }
}
