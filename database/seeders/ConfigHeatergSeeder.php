<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ConfigHeater;

class HeaterConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConfigHeater::create([
            'device_id' => 1, // Ganti dengan ID perangkat yang sesuai
            'temperature_setpoint' => 25.0,
            'is_manual_mode' => true,
            'manual_temperature' => 30.0,
            'automatic_temperature_min' => null,
            'automatic_temperature_max' => null,
        ]);

        ConfigHeater::create([
            'device_id' => 2, // Ganti dengan ID perangkat yang sesuai
            'temperature_setpoint' => null,
            'is_manual_mode' => false,
            'manual_temperature' => null,
            'automatic_temperature_min' => 18.0,
            'automatic_temperature_max' => 24.0,
        ]);
    }
}
