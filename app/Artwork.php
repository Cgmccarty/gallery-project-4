<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    public function users() {
        $this->hasMany('\App\User');
    }
}
