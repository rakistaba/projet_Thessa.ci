<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PrestatairesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nom_prest' => $this->faker->name(),
            'prenom_prest' => $this->faker->firstName,
            'ville_prest' =>$this->faker->city,
            'contact_prest' => $this->faker->phoneNumber,
            'email_prest' => $this->faker->unique()->safeEmail(),
            'sexe_prest' => array_rand(["homme", "femme"], 1),
            'imagePath'  => $this->faker->imageUrl,
            //'email_verified_at' => now(),
            'password_prest' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            //'remember_token' => Str::random(10),
        ];
    }
}
