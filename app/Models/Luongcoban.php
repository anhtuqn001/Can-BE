<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Luongcoban
 * 
 * @property int $id
 * @property float $mucluongcoban
 * @property Carbon $ngayapdung
 * @property Carbon $ngayquyetdinh
 * @property string $soquyetdinh
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Luongcoban extends Model
{
	protected $table = 'luongcoban';

	protected $casts = [
		'mucluongcoban' => 'float',
		'ngayapdung' => 'datetime',
		'ngayquyetdinh' => 'datetime'
	];

	protected $fillable = [
		'mucluongcoban',
		'ngayapdung',
		'ngayquyetdinh',
		'soquyetdinh'
	];
}
