<?php

use Illuminate\Database\Seeder;

class DataNikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DataNik::class, 25)->create();
    }
}
