<?php

use Illuminate\Database\Seeder;
use App\Visit;

class VisitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visit::truncate();
        factory(App\Visit::class, 100)->create();
    }
}
