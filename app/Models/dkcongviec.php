<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dkcongviec extends Model
{
    protected $table = 'dk_congviec';
	protected $primaryKey = 'id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'id',
        'id_user',
        'id_cv',
        'trang_thai',
        'hinh_anh',

	];
}
