<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Service;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => 1,
            "service_id" => Service::all()->random()->id,
            "from" => $this->faker->dateTime(),
            "to" => $this->faker->dateTime(),
            "location" => $this->faker->address(),
            "status" => Status::all()->random()->name,

        ];
    }
}
