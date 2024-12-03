<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    public function category(){
        return $this->belongsTo(category::class);
    }
}
