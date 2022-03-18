<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tipousuario;
use App\Models\invernadero;
use App\Models\User;
use App\Models\temperatura;
use App\Models\sensores;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        tipousuario::factory(5)->create();
        invernadero::factory(5)->create();
        User::factory(5)->create();
        temperatura::factory(5)->create();
        sensores::factory(5)->create();
    }
}
