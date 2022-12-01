<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhAnh extends Model
{
    use HasFactory;

    public function bai_dang()
    {
        return $this->belongsTo(BaiDang::class);
    }

    public function chi_tiet_bai_dang()
    {
        return $this->belongsTo(ChiTietBaiDang::class);
    }
}
