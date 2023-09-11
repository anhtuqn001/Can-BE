<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Phucapluong
 * 
 * @property int $id
 * @property int $id_bangluong
 * @property float $id_phucap
 * @property int $id_donvi
 * @property float $heso
 * @property float $thanhtien
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Phucapluong extends Model
{
	protected $table = 'phucapluong';

	protected $casts = [
		'id_bangluong' => 'int',
		'id_phucap' => 'float',
		'id_donvi' => 'int',
		'heso' => 'float',
		'thanhtien' => 'float'
	];

	protected $fillable = [
		'id_bangluong',
		'id_phucap',
		'id_donvi',
		'heso',
		'thanhtien'
	];
}
