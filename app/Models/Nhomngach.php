<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Nhomngach
 * 
 * @property int $id
 * @property string $manhomngach
 * @property string $tennhomngach
 * @property int $sothangnangluong
 * @property float $bac1
 * @property float $bac2
 * @property float $bac3
 * @property float $bac4
 * @property float $bac5
 * @property float $bac6
 * @property float $bac7
 * @property float $bac8
 * @property float $bac9
 * @property float $bac10
 * @property float $bac11
 * @property float $bac12
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Nhomngach extends Model
{
	protected $table = 'nhomngach';

	protected $casts = [
		'sothangnangluong' => 'int',
		'bac1' => 'float',
		'bac2' => 'float',
		'bac3' => 'float',
		'bac4' => 'float',
		'bac5' => 'float',
		'bac6' => 'float',
		'bac7' => 'float',
		'bac8' => 'float',
		'bac9' => 'float',
		'bac10' => 'float',
		'bac11' => 'float',
		'bac12' => 'float'
	];

	protected $fillable = [
		'manhomngach',
		'tennhomngach',
		'sothangnangluong',
		'bac1',
		'bac2',
		'bac3',
		'bac4',
		'bac5',
		'bac6',
		'bac7',
		'bac8',
		'bac9',
		'bac10',
		'bac11',
		'bac12'
	];
}
