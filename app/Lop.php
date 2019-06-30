<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lop extends Model
{
    protected $table = 'lops';

    public function khoa()
    {
        return $this->belongsTo('App\Khoa');
    }
}
