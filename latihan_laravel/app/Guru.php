<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'id_guru',
        'nip',
        'nama_guru',
        'tanggal_lahir',
        'jenis_kelamin'
    ];
    protected $primaryKey = 'id_guru';

    public function Walikelas()
    {
	return $this->hasOne('App\Walikelas', 'id');
    }
}
