<?php

namespace Database\Seeders;

use App\Models\Bus;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buses = [
            [
                'name' => 'Saramaya',
                'bus_code' => 'Ax1def1',
                'from' => 'Ouagadougou',
                'to' => 'Bobo',
                'arrival_days' => 'Every day',
                'arrival_time' => '7:00',
                'fare' => '6500',
                'driver_name' => 'Ouedraogo',
                'status' => '1',
                'seats' => '60',
            ],
            [
                'name' => 'Tsr',
                'bus_code' => 'Ax1def2',
                'from' => 'Ouagadougou',
                'to' => 'Bobo',
                'arrival_days' => 'Every day',
                'arrival_time' => '8:00',
                'fare' => '6000',
                'driver_name' => 'Sayadogo',
                'status' => '1',
                'seats' => '70',
            ],
            [
                'name' => 'Highway Deluxe',
                'bus_code' => 'Ax1defa',
                'from' => 'New York',
                'to' => 'California',
                'arrival_days' => 'Every day',
                'arrival_time' => '11:00',
                'fare' => '200',
                'driver_name' => 'bucky',
                'status' => '1',
                'seats' => '50',
            ],
            [
                'name' => 'Supreme 12 Deluxe',
                'bus_code' => 'Z1fe3s3',
                'from' => 'California',
                'to' => 'Texas',
                'arrival_days' => 'Every day except sunday',
                'arrival_time' => '12:00',
                'fare' => '300',
                'driver_name' => 'Smith',
                'status' => '1',
                'seats' => '50',
            ],
            [
                'name' => 'Monkai speedy',
                'bus_code' => 'dd123d',
                'from' => 'Arizona',
                'to' => 'Colorado',
                'arrival_days' => 'Sunday',
                'arrival_time' => '12:00',
                'fare' => '300',
                'driver_name' => 'Rnonny',
                'status' => '1',
                'seats' => '50',
            ],

            [
                'name' => 'Supreme New Deluxe 12',
                'bus_code' => 'Z1fe3s3',
                'from' => 'Colorado',
                'to' => 'California',
                'arrival_days' => 'Monday',
                'arrival_time' => '12:00',
                'fare' => '305',
                'driver_name' => 'Michal',
                'status' => '1',
                'seats' => '50',
            ],

            [
                'name' => 'Ment 12 Bull',
                'bus_code' => 'zxs23',
                'from' => 'Arizona',
                'to' => 'Tennessee',
                'arrival_days' => 'Tuesday',
                'arrival_time' => '12:00',
                'fare' => '255',
                'driver_name' => 'Munic',
                'status' => '1',
                'seats' => '50',
            ],

            [
                'name' => 'Speedy Bus',
                'bus_code' => 'cd123',
                'from' => 'Arizona',
                'to' => 'Tennessee',
                'arrival_days' => 'Wednesday',
                'arrival_time' => '12:00',
                'fare' => '345',
                'driver_name' => 'Petty',
                'status' => '1',
                'seats' => '50',
            ],
            [
                'name' => 'Night Bus101',
                'bus_code' => 'g1s3',
                'from' => 'Kansas plot',
                'to' => 'Louisiana',
                'arrival_days' => 'Thursday',
                'arrival_time' => '12:00',
                'fare' => '550',
                'driver_name' => 'Beya',
                'status' => '1',
                'seats' => '50',
            ],
            [
                'name' => 'EveryDay Bus 2',
                'bus_code' => 'Oklahoma',
                'from' => 'New york',
                'to' => 'Jersey City',
                'arrival_days' => 'Everyday',
                'arrival_time' => '12:00',
                'fare' => '235',
                'driver_name' => 'Sush',
                'status' => '1',
                'seats' => '50',
            ],

        ];
        foreach ($buses as $index => $bus) {
            $i = $index + 1;
            $bus = Bus::factory()->create([
                'name' => $bus['name'],
                'bus_code' => $bus['bus_code'],
                'img' =>  'images/bus/' . $i . '.jpg' ,
                'from' => $bus['from'],
                'to' => $bus['to'],
                'arrival_days' => $bus['arrival_days'],
                'arrival_time' => $bus['arrival_time'],
                'fare' => $bus['fare'],
                'driver_name' => $bus['driver_name'],
                'status' => $bus['status'],
                'seats' => $bus['seats'],
            ]);
        }
    }  
}
