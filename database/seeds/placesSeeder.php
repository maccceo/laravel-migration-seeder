<?php

use Illuminate\Database\Seeder;
use App\Place;

class placesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Place::class, 20) -> create();
    }
}
