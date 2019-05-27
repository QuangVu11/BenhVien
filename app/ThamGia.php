<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThamGia extends Model
{
    protected $table = 'ThamGia';
    protected $guared = ['id'];
    protected $date = [
        'created_at',
        'updated_at',
    ];
    public function nhanvien()
    {
        return $this->belongsTo('App\NhanVien','NhanVien_id');
    }
    public function benhan()
    {
        return $this->belongsTo('App\BenhAn','BenhAn_id');
    }
}
