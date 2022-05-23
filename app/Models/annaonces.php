<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annaonces extends Model
{
    use HasFactory;

    public function clients(){
        return $this->hasMany(Clients::class);
    }

    public function administrateurs(){
        return $this->hasMany(Administrateurs::class);
    }
}
