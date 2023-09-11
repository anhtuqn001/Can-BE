<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Manguon
 * 
 * @property int $id
 * @property int $somanguon
 * @property string $tenmanguon
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Manguon extends Model
{
	protected $table = 'manguon';

	protected $casts = [
		'somanguon' => 'int'
	];

	protected $fillable = [
		'somanguon',
		'tenmanguon'
	];
}
