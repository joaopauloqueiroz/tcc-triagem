<?php

use Illuminate\Database\Seeder;
use App\Models\Pacientes\Pacient;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(UserSeeder::class);
        $this->call(ExameSeeder::class);
        ///$this->call(ProtocolSeeder::class);
        //$this->call(PacientSeeder::class);
    }
}
