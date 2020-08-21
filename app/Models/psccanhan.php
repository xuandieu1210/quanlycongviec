<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class psccanhan extends Model
{
    protected $table = 'psccanhan';
	protected $primaryKey = 'id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'id',
        'id_nhan_vien',
        'trong_so',
        'chi_tieu_giao',
        'thuc_hien',
        'ty_le_hoan_thanh',
        'diem_cong_viec',
        'tong_diem',
        'trang_thai',
        'id_congviec'

	];
}
