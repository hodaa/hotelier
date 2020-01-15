<?php

namespace Tests\Feature;

use App\Models\Hotel;
use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;

class bookHotelAPiTest extends TestCase
{
    use RefreshDatabase;


    /**
     * assert booked successfully
     *
     * @return void
     */
    public function testBookedSucceeded()
    {
        factory(Hotel::class)->create();
        $response = $this->post('api/v1/hotel/1/book');
        $response->assertStatus(200)->assertJson([
            "status" => "success",
            "message" => "Hotel booked successfully"
        ]);
    }

    /**
     * assert booked successfully
     *
     * @return void
     */
    public function testBookedFailed()
    {
        factory(Hotel::class)->create(['availability' => 0]);
        $response = $this->post('api/v1/hotel/1/book');
        $response->assertStatus(422);
        $response->assertJson([
            "status" => "success",
            "message" => "Hotel fully booked"
        ]);
    }
}
