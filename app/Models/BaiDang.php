<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiDang extends Model
{
    use HasFactory;

    public function hinh_anh()
    {
        return $this->hasMany(HinhAnh::class);
    }

    public function danh_gia()
    {
        return $this->hasMany(DanhGia::class);
    }

    public function chi_tiet_bai_dang()
    {
        return $this->hasMany(ChiTietBaiDang::class);
    }

    public function the_loai()
    {
        return $this->belongsTo(BaiDang::class);
    }
    
}
