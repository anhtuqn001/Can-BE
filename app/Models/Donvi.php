<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Donvi
 *
 * @property int $id
 * @property string $tendonvi
 * @property int $id_tructhuoc
 * @property int $tinh
 * @property int $huyen
 * @property int $xa
 * @property int $captruong
 * @property int $loaiphongban
 * @property int $phanloai
 * @property int $khoiquanly
 * @property int $thutruong
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Donvi extends Model
{
	protected $table = 'donvi';

	protected $casts = [
		'id_tructhuoc' => 'int',
		'tinh' => 'int',
		'huyen' => 'int',
		'xa' => 'int',
		'captruong' => 'int',
		'loaiphongban' => 'int',
		'phanloai' => 'int',
		'khoiquanly' => 'int',
		'thutruong' => 'int'
	];

	protected $fillable = [
		'tendonvi',
		'id_tructhuoc',
		'tinh',
		'huyen',
		'xa',
		'captruong',
		'loaiphongban',
		'phanloai',
		'khoiquanly',
		'thutruong'
	];

    public function huyen()
	{
		return $this->belongsTo(Huyen::class, 'huyen');
	}

	public function tinh()
	{
		return $this->belongsTo(Tinh::class, 'tinh');
	}
}
