<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ttd extends Model
{
    protected $table = 'ttd';

    protected $fillable = [
        'nrp',
        'nama',
        'jabatan',
    ];
}
