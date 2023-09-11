<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Bangluongthang
 * 
 * @property int $id
 * @property int $id_donvi
 * @property int $id_huyen
 * @property int $luong_thang
 * @property int $luong_nam
 * @property string $hovaten
 * @property int $cmnd
 * @property int $gioitinh
 * @property Carbon $ngaysinh
 * @property string $id_chucvu
 * @property string $diachi
 * @property string $diachibangluong
 * @property int $stkbank
 * @property int $bank
 * @property Carbon $ngaybienche
 * @property int $ngaycong
 * @property int $ngaycongtinhluong
 * @property int $ngaycongtru
 * @property string $mangach
 * @property int $bac
 * @property float $lcb
 * @property float $hsl
 * @property Carbon $ngayhuongluong
 * @property int $muchuong
 * @property float $luongkhoan
 * @property int $loaihd
 * @property float $pc_chucvu
 * @property float $pc_tnvk
 * @property float $pc_tnn
 * @property float $pc_khuvuc
 * @property float $pc_thuhut
 * @property float $pc_launam
 * @property float $pc_kiemnhiem
 * @property float $pc_trachnhiem
 * @property float $pc_dochai
 * @property float $pc_dacbiet
 * @property float $pc_khac
 * @property float $bhxh_dv
 * @property float $bhxh
 * @property float $bhyt_dv
 * @property float $bhyt
 * @property float $bhtn_dv
 * @property float $bhtn
 * @property float $kpcd_dv
 * @property float $kpcd
 * @property float $truylinh
 * @property float $khoantru
 * @property float $khoancong
 * @property int $thaisan
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Bangluongthang extends Model
{
	protected $table = 'bangluongthang';

	protected $casts = [
		'id_donvi' => 'int',
		'id_huyen' => 'int',
		'luong_thang' => 'int',
		'luong_nam' => 'int',
		'cmnd' => 'int',
		'gioitinh' => 'int',
		'ngaysinh' => 'datetime',
		'stkbank' => 'int',
		'bank' => 'int',
		'ngaybienche' => 'datetime',
		'ngaycong' => 'int',
		'ngaycongtinhluong' => 'int',
		'ngaycongtru' => 'int',
		'bac' => 'int',
		'lcb' => 'float',
		'hsl' => 'float',
		'ngayhuongluong' => 'datetime',
		'muchuong' => 'int',
		'luongkhoan' => 'float',
		'loaihd' => 'int',
		'pc_chucvu' => 'float',
		'pc_tnvk' => 'float',
		'pc_tnn' => 'float',
		'pc_khuvuc' => 'float',
		'pc_thuhut' => 'float',
		'pc_launam' => 'float',
		'pc_kiemnhiem' => 'float',
		'pc_trachnhiem' => 'float',
		'pc_dochai' => 'float',
		'pc_dacbiet' => 'float',
		'pc_khac' => 'float',
		'bhxh_dv' => 'float',
		'bhxh' => 'float',
		'bhyt_dv' => 'float',
		'bhyt' => 'float',
		'bhtn_dv' => 'float',
		'bhtn' => 'float',
		'kpcd_dv' => 'float',
		'kpcd' => 'float',
		'truylinh' => 'float',
		'khoantru' => 'float',
		'khoancong' => 'float',
		'thaisan' => 'int'
	];

	protected $fillable = [
		'id_donvi',
		'id_huyen',
		'luong_thang',
		'luong_nam',
		'hovaten',
		'cmnd',
		'gioitinh',
		'ngaysinh',
		'id_chucvu',
		'diachi',
		'diachibangluong',
		'stkbank',
		'bank',
		'ngaybienche',
		'ngaycong',
		'ngaycongtinhluong',
		'ngaycongtru',
		'mangach',
		'bac',
		'lcb',
		'hsl',
		'ngayhuongluong',
		'muchuong',
		'luongkhoan',
		'loaihd',
		'pc_chucvu',
		'pc_tnvk',
		'pc_tnn',
		'pc_khuvuc',
		'pc_thuhut',
		'pc_launam',
		'pc_kiemnhiem',
		'pc_trachnhiem',
		'pc_dochai',
		'pc_dacbiet',
		'pc_khac',
		'bhxh_dv',
		'bhxh',
		'bhyt_dv',
		'bhyt',
		'bhtn_dv',
		'bhtn',
		'kpcd_dv',
		'kpcd',
		'truylinh',
		'khoantru',
		'khoancong',
		'thaisan'
	];
}
