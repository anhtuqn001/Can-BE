<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Chucvu
 * 
 * @property int $id
 * @property string $tenchucvu
 * @property string $chucvu_vt
 * @property int $nhomcv
 * @property int $muccv
 * @property int $donvi
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Chucvu extends Model
{
	protected $table = 'chucvu';

	protected $casts = [
		'nhomcv' => 'int',
		'muccv' => 'int',
		'donvi' => 'int'
	];

	protected $fillable = [
		'tenchucvu',
		'chucvu_vt',
		'nhomcv',
		'muccv',
		'donvi'
	];
}
