<?php

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::insert([
            [
                'id' => 1,
                'name' => 'Egypt'
            ], [
                'id' => 2,
                'name' => 'Germany'
            ]
        ]);
    }
}
