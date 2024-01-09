<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $fillable = ['judul','ketJudul','kk','ketkk','jurusan1','ket1jurusan1'
    ,'ket2jurusan1','jurusan2','ket1jurusan2','ket2jurusan2','profesi','ketprofesi'
    ,'profesi1','ketprofesi1','profesi2','ketprofesi2','profesi3','ketprofesi3','profesi4'
    ,'ketprofesi4'];
}
