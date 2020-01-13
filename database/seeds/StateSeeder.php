<?php

use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::insert([
        [
            'id' => 1,
            'name' => 'state1'
        ], [
            'id' => 2,
            'name' => 'state2'
        ]
        ]);
    }
}
