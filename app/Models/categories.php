<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public function tasks(){
        return $this->hasMany(task::class);
    }
}
