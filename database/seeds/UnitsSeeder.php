<?php

use Illuminate\Database\Seeder;
use Vanguard\Unit;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unit = Unit::create([
            'tx_unit' => '°F'
        ]);
        $unit = Unit::create([
            'tx_unit' => '°C'
            ]);
        $unit = Unit::create([
            'tx_unit' => 'MW'
        ]);
        $unit = Unit::create([
            'tx_unit' => 'MVAR'
            ]);
        $unit = Unit::create([
            'tx_unit' => 'KV'
        ]);
        $unit = Unit::create([
            'tx_unit' => 'KA'
            ]);
        $unit = Unit::create([
            'tx_unit' => 'Hz'
            ]);
        $unit = Unit::create([
            'tx_unit' => 'FP'
        ]);
        $unit = Unit::create([
            'tx_unit' => 'Amp'
            ]);
        $unit = Unit::create([
            'tx_unit' => 'Volts'
            ]);
        $unit = Unit::create([
            'tx_unit' => 'PSI' //11
            ]);
        $unit = Unit::create([
            'tx_unit' => 'inH2O'
            ]);
        $unit = Unit::create([
            'tx_unit' => 'NIV'
            ]);
    }
}
