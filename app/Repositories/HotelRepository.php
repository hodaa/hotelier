<?php

namespace App\Repositories;

use App\Models\Hotel;

class HotelRepository
{
    /**
     * @param int $offset
     * @param int $page
     * @return mixed
     */
    public function getAllHotels()
    {
        $hotels = Hotel::paginate(20);

        return $hotels;
    }

    /**
     * @param $hotel_id
     * @return bool
     */
    public function book($hotel_id)
    {
        $hotel = Hotel::find($hotel_id);
        if ($hotel->availability) {
            return Hotel::find($hotel_id)->decrement('availability', 1);
        }
        return false;
    }
}
