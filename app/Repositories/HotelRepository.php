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
}
