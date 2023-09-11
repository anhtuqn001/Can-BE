<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Loaihopdong
 * 
 * @property int $id
 * @property string $maloaihd
 * @property string $tenloaihd
 * @property int $id_tieumuc
 * @property int $id_nhomhopdong
 * @property bool $bienche
 * @property bool $bhxh
 * @property bool $bhyt
 * @property bool $bhtn
 * @property string $ghichu
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Loaihopdong extends Model
{
	protected $table = 'loaihopdong';

	protected $casts = [
		'id_tieumuc' => 'int',
		'id_nhomhopdong' => 'int',
		'bienche' => 'bool',
		'bhxh' => 'bool',
		'bhyt' => 'bool',
		'bhtn' => 'bool'
	];

	protected $fillable = [
		'maloaihd',
		'tenloaihd',
		'id_tieumuc',
		'id_nhomhopdong',
		'bienche',
		'bhxh',
		'bhyt',
		'bhtn',
		'ghichu'
	];
}
