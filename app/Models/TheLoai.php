<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    use HasFactory;

    
    public function chi_tiet_bai_dang()
    {
        return $this->belongsTo(TheLoai::class);
    }

    public function bai_dang()
    {
        return $this->hasMany(TheLoai::class);
    }
}
