<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Phucapthietlap
 * 
 * @property int $id
 * @property int $id_phucap
 * @property int $donvi
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Phucapthietlap extends Model
{
	protected $table = 'phucapthietlap';

	protected $casts = [
		'id_phucap' => 'int',
		'donvi' => 'int'
	];

	protected $fillable = [
		'id_phucap',
		'donvi'
	];
}
