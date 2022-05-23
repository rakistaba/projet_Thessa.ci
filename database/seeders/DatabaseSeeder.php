<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Prestataires;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(DatabaseTableSeeder::class);

        $users = User::all();
        $presta = Prestataires::all();
        foreach ($users as $key => $use) {
            foreach ($presta as $key => $prestataire) {
                $use->prestataires()->attach($prestataire);
            }
        }
    }
}
