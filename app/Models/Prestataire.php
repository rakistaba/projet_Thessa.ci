<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

use App\Models\User;



class Prestataire extends Model
{
    use HasFactory, softDeletes;

   protected $fillable = [
        'nom_prest',
        'prenom_prest', 
        'ville_prest', 
        'contact_prest', 
        'metier_prest', 
        'email_prest', 
        'password_prest',
        'langue_prest', 
        'sexe_prest',
        'age_prest',
        'imagePath',
        'domaine_prest',
        'description_prest',
    ];

    public function users() {
        return $this->belongsToMany(User::class);
    }
    
}
