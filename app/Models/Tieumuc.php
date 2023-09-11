<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tieumuc
 * 
 * @property int $id
 * @property string $matieumuc
 * @property string $tentieumuc
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Tieumuc extends Model
{
	protected $table = 'tieumuc';

	protected $fillable = [
		'matieumuc',
		'tentieumuc'
	];
}
