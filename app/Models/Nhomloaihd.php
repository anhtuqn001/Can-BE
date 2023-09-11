<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Nhomloaihd
 * 
 * @property int $id
 * @property string $tennhomhd
 * @property string $id_loadhd
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Nhomloaihd extends Model
{
	protected $table = 'nhomloaihd';

	protected $fillable = [
		'tennhomhd',
		'id_loadhd'
	];
}
