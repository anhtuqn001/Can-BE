<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ngachluong
 * 
 * @property int $id
 * @property string $mangach
 * @property string $tenmangach
 * @property int $id_nhomngach
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Ngachluong extends Model
{
	protected $table = 'ngachluong';

	protected $casts = [
		'id_nhomngach' => 'int'
	];

	protected $fillable = [
		'mangach',
		'tenmangach',
		'id_nhomngach'
	];
}
