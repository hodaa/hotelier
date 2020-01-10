<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateHotelTest extends TestCase
{
    use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testNameShouldBeLongerThan10()
    {
        $response = $this->post('api/v1/hotels',[
            'name'=>'name example1'
        ]);
        dd($response);
    }
}
