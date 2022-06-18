<?php

namespace App\Models;

use CodeIgniter\Model;

class DataDiri extends Model
{
	protected $table = 'datadiri';
	protected $allowedFields = ['npm','nama', 'tempat_lahir', 'tanggal_lahir', 'jeniskelamin', 'agama', 'alamat', 'email', 
								 'nohp', 'sd', 'smp', 'sma', 'kuliah', 'skill1', 'skill2', 'skill3', 'skill4'];
	protected $primaryKey = 'npm';
}
?>