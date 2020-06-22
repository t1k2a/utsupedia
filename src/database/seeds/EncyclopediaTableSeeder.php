<?php

use Illuminate\Database\Seeder;
use App\Encyclopedia;

class EncyclopediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = factory(App\Encyclopedia::class, 20)->create();
    }
}
