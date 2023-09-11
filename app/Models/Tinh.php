<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tinh
 *
 * @property int $id
 * @property string $TenTinh
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Tinh extends Model
{
	protected $table = 'tinh';

	protected $fillable = [
		'TenTinh'
	];

    public function donvi()
	{
		return $this->hasMany(Donvi::class, 'huyen');
	}
}
