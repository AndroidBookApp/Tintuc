<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    use HasFactory;

    public function bai_dang()
    {
        return $this->belongsTo(DanhGia::class);
    }
}
