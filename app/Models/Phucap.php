<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Phucap
 * 
 * @property int $id
 * @property string $tenphucap
 * @property string $pcviettat
 * @property int $cachtinh
 * @property bool $bhxh
 * @property bool $bhyt
 * @property bool $bhtn
 * @property bool $kpcd
 * @property int $id_tieumuc
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Phucap extends Model
{
	protected $table = 'phucap';

	protected $casts = [
		'cachtinh' => 'int',
		'bhxh' => 'bool',
		'bhyt' => 'bool',
		'bhtn' => 'bool',
		'kpcd' => 'bool',
		'id_tieumuc' => 'int'
	];

	protected $fillable = [
		'tenphucap',
		'pcviettat',
		'cachtinh',
		'bhxh',
		'bhyt',
		'bhtn',
		'kpcd',
		'id_tieumuc'
	];
}
