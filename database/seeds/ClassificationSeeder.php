<?php

use Illuminate\Database\Seeder;
use Vanguard\Classification;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classification = Classification::create([
            'tx_name' => 'GENERADOR ELECTRICO',
   			'tx_description' => 'descripcion'
        ]);
        $classification = Classification::create([
            'tx_name' => 'TURBINA A GAS',
   			'tx_description' => 'descripcion'
        ]);
        $classification = Classification::create([
            'tx_name' => 'COJINETES DE TURBINA - VIBRACION',
   			'tx_description' => 'descripcion'
        ]);
        $classification = Classification::create([
            'tx_name' => 'CAJA DE ACCESORIOS',
   			'tx_description' => 'descripcion'
        ]);
        $classification = Classification::create([
            'tx_name' => 'COINETE DE EMPUJE (THRUST)',
   			'tx_description' => 'descripcion'
        ]);
        $classification = Classification::create([
            'tx_name' => 'COJINETES DE TURBINA - TEMPERATURA',
   			'tx_description' => 'descripcion'
        ]);
        $classification = Classification::create([
            'tx_name' => 'COJINETES DEL GENERADOR ELECTRICO - TEMPERATURA',
   			'tx_description' => 'descripcion'
        ]);
        $classification = Classification::create([
            'tx_name' => 'CAJA REDUCTORA - TEMPERATURA',
   			'tx_description' => 'descripcion'
        ]);

        $classification = Classification::create([
            'tx_name' => 'SISTEMAS AUXILIARES',
   			'tx_description' => 'descripcion'
        ]);
        $classification = Classification::create([
            'tx_name' => 'OTROS',
        'tx_description' => 'descripcion'
        ]);
    }
}
