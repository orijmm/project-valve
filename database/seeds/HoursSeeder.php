<?php

use Illuminate\Database\Seeder;
use Vanguard\Hour;

class HoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hour = Hour::create([
            'time' => '08:00'
        ]);
        $hour = Hour::create([
            'time' => '10:00'
        ]);
        $hour = Hour::create([
            'time' => '12:00'
        ]);
        $hour = Hour::create([
            'time' => '14:00'
        ]);
        $hour = Hour::create([
            'time' => '16:00'
        ]);
        $hour = Hour::create([
            'time' => '18:00'
        ]);
        $hour = Hour::create([
            'time' => '20:00'
        ]);
        $hour = Hour::create([
            'time' => '22:00'
        ]);
        $hour = Hour::create([
            'time' => '00:00'
        ]);
        $hour = Hour::create([
            'time' => '02:00'
        ]);
        $hour = Hour::create([
            'time' => '04:00'
        ]);
        $hour = Hour::create([
            'time' => '06:00'
        ]);
    }
}
