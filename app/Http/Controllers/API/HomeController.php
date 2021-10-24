<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dbSeed()
    {
        // \App\Models\Service::factory(10)->create();
        // \App\Models\Booking::factory(50)->create();
        \App\Models\Service::insert(
            [
                "name" =>  "Yoga and Pilate Training",
                "category" =>  "Fitness",
                "description" =>  "Lorem ipsum dolor sit, amet consectetur adipisicing elit. ",
                "price" => 80
            ]
        );
        \App\Models\Service::insert([
            "name" =>  "Cardio Gym",
            "category" =>  "Fitness",
            "description" =>  "Lorem ipsum dolor sit, amet consectetur adipisicing elit. ",
            "price" => 180
        ]);
        \App\Models\Service::insert([
            "name" =>  "Pro Fitness",
            "category" =>  "Fitness",
            "description" =>  "Lorem ipsum dolor sit, amet consectetur adipisicing elit. ",
            "price" => 260
        ]);
        \App\Models\Service::insert([
            "name" =>  "Kungfu",
            "category" =>  "Martial Arts",
            "description" =>  "Lorem ipsum dolor sit, amet consectetur adipisicing elit. ",
            "price" => 150
        ]);


        //service 1
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 1,
            "from" => now(),
            "to" => now(),
            "location" => "A21 , SEA , Street 1, CA",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 1,
            "from" => now(),
            "to" => now(),
            "location" => "BCD , IGA , 2A Street, NV",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 1,
            "from" => now(),
            "to" => now(),
            "location" => "IBN, Street 10A, WD",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 1,
            "from" => now(),
            "to" => now(),
            "location" => "GER, Street 777, GA",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 1,
            "from" => now(),
            "to" => now(),
            "location" => "222, INDIANA, Strret66, IN",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 1,
            "from" => now(),
            "to" => now(),
            "location" => "SDER, WQStreet, AB",
            "status" => "Pending",
        ]);

        //service 1
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 2,
            "from" => now(),
            "to" => now(),
            "location" => "A21 , SEA , Street 1, CA",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 2,
            "from" => now(),
            "to" => now(),
            "location" => "BCD , IGA , 2A Street, NV",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 2,
            "from" => now(),
            "to" => now(),
            "location" => "IBN, Street 10A, WD",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 2,
            "from" => now(),
            "to" => now(),
            "location" => "GER, Street 777, GA",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 2,
            "from" => now(),
            "to" => now(),
            "location" => "222, INDIANA, Strret66, IN",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 2,
            "from" => now(),
            "to" => now(),
            "location" => "SDER, WQStreet, AB",
            "status" => "Pending",
        ]);

        //service 3
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 3,
            "from" => now(),
            "to" => now(),
            "location" => "A21 , SEA , Street 1, CA",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 3,
            "from" => now(),
            "to" => now(),
            "location" => "BCD , IGA , 2A Street, NV",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 3,
            "from" => now(),
            "to" => now(),
            "location" => "IBN, Street 10A, WD",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 3,
            "from" => now(),
            "to" => now(),
            "location" => "GER, Street 777, GA",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 3,
            "from" => now(),
            "to" => now(),
            "location" => "222, INDIANA, Strret66, IN",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 3,
            "from" => now(),
            "to" => now(),
            "location" => "SDER, WQStreet, AB",
            "status" => "Pending",
        ]);

        //service 4
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 4,
            "from" => now(),
            "to" => now(),
            "location" => "A21 , SEA , Street 1, CA",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 4,
            "from" => now(),
            "to" => now(),
            "location" => "BCD , IGA , 2A Street, NV",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 4,
            "from" => now(),
            "to" => now(),
            "location" => "IBN, Street 10A, WD",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 4,
            "from" => now(),
            "to" => now(),
            "location" => "GER, Street 777, GA",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 4,
            "from" => now(),
            "to" => now(),
            "location" => "222, INDIANA, Strret66, IN",
            "status" => "Pending",
        ]);
        \App\Models\Booking::insert([
            "user_id" => 1,
            "service_id" => 1,
            "from" => now(),
            "to" => now(),
            "location" => "SDER, WQStreet, AB",
            "status" => "Pending",
        ]);
    }
}
