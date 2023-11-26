<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';
    protected $guarded = [];

    public function mahasiswa()
    {
        return $this->hasMany(mahasiswa::class);
    }
    public function dosen()
    {
        return $this->hasMany(dosen::class);
    }
    public function user()
    {
        return $this->hasMany(user::class);
    }
}
