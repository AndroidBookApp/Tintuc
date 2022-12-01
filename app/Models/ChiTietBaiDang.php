<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietBaiDang extends Model
{
    use HasFactory;

    public function hinh_anh()
    {
        return $this->hasMany(HinhAnh::class);
    }

    public function bai_dang()
    {
        return $this->belongsTo(BaiDang::class);
    }

}
