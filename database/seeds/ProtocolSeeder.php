<?php

use Illuminate\Database\Seeder;
use App\Models\Protocolos\Protocol;

class ProtocolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Protocol::insert([
            'name' => 'VCI'
        ]);
    }
}
