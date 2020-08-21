<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class congviecchitiet extends Model
{
    protected $table = 'psccongviecchitiet';
	protected $primaryKey = 'id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'id',
		'tencvchitiet',
		'id_cong_viec_chinh',
        'id_nhanvien',
        'trangthai'

	];
}
