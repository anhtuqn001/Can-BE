<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Huyen
 *
 * @property int $id
 * @property string $TenHuyen
 * @property int $Tinh
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Huyen extends Model
{
	protected $table = 'huyen';

	protected $casts = [
		'Tinh' => 'int'
	];

	protected $fillable = [
		'TenHuyen',
		'Tinh'
	];

    public function donvi()
	{
		return $this->hasMany(Donvi::class, 'huyen');
	}
}
