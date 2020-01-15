<?php

namespace App\Http\Resources;

use App\Enums\CategoryEnum;
use App\Models\Country;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\City;
use App\Models\State;
use App\Enums\ReputationBadgeEnum;

class HotelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'rating' => $this->rating,
            'image' => url($this->image),
            'reputation' => ReputationBadgeEnum::REPUTATION_BADGES[$this->reputation],
            'category' => CategoryEnum::CATEGORIES[$this->category],
            'price' => $this->price,
            'availability' => $this->availability,
            'country' => Country::where('id', $this->country_id)->first()->name,
            'city' => City::where('id', $this->city_id)->first()->name,
            'state' => State::where('id', $this->state_id)->first()->name,
            'zip_code' => $this->zip_code,
            'address' => $this->address,





        ];
    }
}
