<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class work extends Model
{
    protected $fillable=['nama','tgl','sumber','jenis_pekerjaan','programer','keterangan'];
}
