<?php

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::insert([
            [
                'id' => 1,
                'name' => 'Cairo'
            ], [
                'id' => 2,
                'name' => 'Berlin'
            ]
        ]);
    }
}
