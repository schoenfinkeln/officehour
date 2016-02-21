<?php

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Database\Seeder;

class OfficehourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $officehours = [
            new App\Officehour([
                'begin' => Carbon::now()->addHour(1),
            ]),
            new App\Officehour([
                'begin' => Carbon::now()->addHour(2)->addDays(1),
            ]),
            new App\Officehour([
                'begin' => Carbon::now()->addHour(3)->addDays(2),
            ]),
        ];
        foreach ($officehours as $officehour) {
            $officehour->save();
        }

        $appointments = [
            new App\Appointment([
                'begin' => Carbon::now()->addMinutes(30),
                'user' => 1,
                'occasion' => 'Klausur im Lehramt',
                'officehour_id' => 1,
            ]),
            new App\Appointment([
                'begin' => Carbon::now()->addHour(2)->addDays(1),
                'duration' => CarbonInterval::minutes(20),
                'user' => 1,
                'occasion' => 'Besprechung der Hausarbeit',
                'officehour_id' => 2
            ]),
            new App\Appointment([
                'begin' => Carbon::now()->addHour(3)->addDays(2),
                'user' => 1,
                'occasion' => 'Besprechung der Doktorarbeit',
                'officehour_id' => 1
            ]),
        ];
        foreach ($appointments as $appointment) {
            $appointment->save();
        }

    }
}
