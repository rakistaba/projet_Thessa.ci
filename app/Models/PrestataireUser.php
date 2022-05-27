<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class PrestataireUser extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['user_id', 'prestataire_id'];
}
