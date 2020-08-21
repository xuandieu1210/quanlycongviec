<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class congviecchinh extends Model
{
    protected $table = 'congviecchinh';
	protected $primaryKey = 'id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'id',
		'ten_cv_chinh',
		'id_donvi',
		'trang_thai',
		'trong_so_dk',
        'don_vi_tinh',
        'thoi_gian_hoan_thanh_dk',
        'ti_le_hoan_thanh_dk',
        'trong_so_duyet',
        'don_vi_duyet',
        'thoi_gian_hoan_thanh_duyet',
        'ti_le_hoan_thanh_duyet'

	];
}
