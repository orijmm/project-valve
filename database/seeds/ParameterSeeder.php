<?php

use Illuminate\Database\Seeder;
use Vanguard\Parameter;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parameter = Parameter::create([
            'classification_id' => '10',
		    'tx_parameter' => 'Potencia Activa Generador',
		    'nb_min' => '15',
		    'nb_max' => '19.5',
		    'unit_id' => '3'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '10',
		    'tx_parameter' => 'Potencia Reactiva Generador',
		    'nb_min' => '0',
		    'nb_max' => '10',
		    'unit_id' => '4'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '10',
		    'tx_parameter' => 'Tensión del generador',
		    'nb_min' => '13.5',
		    'nb_max' => '14.5',
		    'unit_id' => '5'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '10',
		    'tx_parameter' => 'Corriente del Generador',
		    'nb_min' => '0.6',
		    'nb_max' => '1.2',
		    'unit_id' => '6'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '10',
		    'tx_parameter' => 'Frecuencia del Generador',
		    'nb_min' => '59.98',
		    'nb_max' => '60.01',
		    'unit_id' => '7'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '10',
		    'tx_parameter' => 'Factor de Potencia',
		    'nb_min' => '-0.96',
		    'nb_max' => '0.89',
		    'unit_id' => '8'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '10',
		    'tx_parameter' => 'Corriente de Exitación',
		    'nb_min' => '80',
		    'nb_max' => '180',
		    'unit_id' => '9'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '10',
		    'tx_parameter' => 'Tensión de Exitación',
		    'nb_min' => '110',
		    'nb_max' => '140',
		    'unit_id' => '10'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '10',
		    'tx_parameter' => 'Tensión Cargador',
		    'nb_min' => '110',
		    'nb_max' => '140',
		    'unit_id' => '10'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '10',
		    'tx_parameter' => 'Corriente Cargador',
		    'nb_min' => '5',
		    'nb_max' => '15',
		    'unit_id' => '9'
        ]);////////////////////////////////////////////////////
        $parameter = Parameter::create([
            'classification_id' => '1',
		    'tx_parameter' => 'Temp. Estator DTGSF1',
		    'nb_min' => '140',
		    'nb_max' => '230',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '1',
		    'tx_parameter' => 'Temp. Estator DTGSF2',
		    'nb_min' => '140',
		    'nb_max' => '230',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '1',
		    'tx_parameter' => 'Temp. Estator DTGSF3',
		    'nb_min' => '140',
		    'nb_max' => '230',
		    'unit_id' => '1'
        ]); 
        $parameter = Parameter::create([
            'classification_id' => '1',
		    'tx_parameter' => 'Temp. Estator DTGSA4',
		    'nb_min' => '140',
		    'nb_max' => '230',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '1',
		    'tx_parameter' => 'Temp. Estator DTGSA5',
		    'nb_min' => '140',
		    'nb_max' => '230',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '1',
		    'tx_parameter' => 'Temp. Estator DTGSA6',
		    'nb_min' => '140',
		    'nb_max' => '230',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '1',
		    'tx_parameter' => 'Temp. Estator DTGSC13',
		    'nb_min' => '140',
		    'nb_max' => '230',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '1',
		    'tx_parameter' => 'Temp. Estator DTGSC14',
		    'nb_min' => '140',
		    'nb_max' => '230',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '1',
		    'tx_parameter' => 'Temp. Estator DTGSC15',
		    'nb_min' => '140',
		    'nb_max' => '230',
		    'unit_id' => '1'
        ]);////////////////////////////////////////////////
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Presión descarga Compresor',
		    'nb_min' => '95',
		    'nb_max' => '120',
		    'unit_id' => '11'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Descarga del compresor',
		    'nb_min' => '100',
		    'nb_max' => '750',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Esc. Promedio (Exh Temp)',
		    'nb_min' => '80',
		    'nb_max' => '969',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Diferencial de Temp. Escape',
		    'nb_min' => '20',
		    'nb_max' => '90',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.1',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.2',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.3',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.4',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.5',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.6',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.7',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.8',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.9',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.10',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.11',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.12',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.13',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.14',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.15',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.16',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.17',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Escape T/C N°.18',
		    'nb_min' => '850',
		    'nb_max' => '1000',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Espacion Rueda Turb 1FO-2',
		    'nb_min' => '350',
		    'nb_max' => '800',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Espacion Rueda Turb 1FO-3',
		    'nb_min' => '350',
		    'nb_max' => '800',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Espacion Rueda Turb 1AO-2',
		    'nb_min' => '500',
		    'nb_max' => '800',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Espacion Rueda Turb 1AO-3',
		    'nb_min' => '500',
		    'nb_max' => '800',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Espacion Rueda Turb 2FO-2',
		    'nb_min' => '500',
		    'nb_max' => '800',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Espacion Rueda Turb 2FO-3',
		    'nb_min' => '500',
		    'nb_max' => '800',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Espacion Rueda Turb 2AO-1',
		    'nb_min' => '500',
		    'nb_max' => '800',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '2',
		    'tx_parameter' => 'Temp. Espacion Rueda Turb 2AO-2',
		    'nb_min' => '500',
		    'nb_max' => '800',
		    'unit_id' => '1'
        ]);//////////////////////////////////////////////////// OJO EN EL unit_id
        $parameter = Parameter::create([
            'classification_id' => '3',
		    'tx_parameter' => 'Vibración Cojinete #1',
		    'nb_min' => '0',
		    'nb_max' => '0.5',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '3',
		    'tx_parameter' => 'Vibración Cojinete #2',
		    'nb_min' => '0',
		    'nb_max' => '0.5',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '3',
		    'tx_parameter' => 'Vibración Cojinete #3',
		    'nb_min' => '0',
		    'nb_max' => '0.5',
		    'unit_id' => '1'
        ]);///////////////////////////////////////////////////////
        $parameter = Parameter::create([
            'classification_id' => '4',
		    'tx_parameter' => 'T1.-Coj.Turbina Conv Torque',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '4',
		    'tx_parameter' => 'T1.-Coj. Turbina',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '4',
		    'tx_parameter' => 'T1.-Coj. Bba Pricinpal Aceite',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '4',
		    'tx_parameter' => 'T1.-Coj. Bba de Agua',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '4',
		    'tx_parameter' => 'T1.-Coj. Bba Hidraúlica',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);/////////////////////////////////////////////////////////
        $parameter = Parameter::create([
            'classification_id' => '5',
		    'tx_parameter' => 'Activo Superior.-T1',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '5',
		    'tx_parameter' => 'Activo Inferior.-T2',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '5',
		    'tx_parameter' => 'Inactivo Superior.T1',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '5',
		    'tx_parameter' => 'Inactivo Inferior.-T2',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);/////////////////////////////////////////////////////////
        $parameter = Parameter::create([
            'classification_id' => '6',
		    'tx_parameter' => 'BJ1.-Coj. de Turbina-Caj. Acces',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '6',
		    'tx_parameter' => 'BJ2.-Coj. de Turbina-Caj. Reduct',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);//////////////////////////////////////////////////////
        $parameter = Parameter::create([
            'classification_id' => '7',
		    'tx_parameter' => 'BJ3.- Coj. de Pedestal Gen',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);//////////////////////////////////////////////////////
        $parameter = Parameter::create([
            'classification_id' => '8',
		    'tx_parameter' => 'T1.-Coj. Alt Vel. Turbina',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '8',
		    'tx_parameter' => 'T2.-Coj. Alt Vel. Generador',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '8',
		    'tx_parameter' => 'T3.-Coj. Baj. Vel lado Turbina',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '8',
		    'tx_parameter' => 'T4.-Coj. Baj. Vel Eje Fusible',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '8',
		    'tx_parameter' => 'T5.-Coj.Baj Vel Rotor de Gen',
		    'nb_min' => '149',
		    'nb_max' => '212',
		    'unit_id' => '1'
        ]);/////////////////////////////////////////////////////
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Temp. Cabezal de Aceite (LTOT4)',
		    'nb_min' => '50',
		    'nb_max' => '175',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Temp. Agua (WTWCD1)',
		    'nb_min' => '50',
		    'nb_max' => '120',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Temp. Entrada de Agua (WTWCI1)',
		    'nb_min' => '50',
		    'nb_max' => '140',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Presión Cabezal Aceite',
		    'nb_min' => '16',
		    'nb_max' => '25',
		    'unit_id' => '11'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Presión Bba Principal de Aceite',
		    'nb_min' => '30',
		    'nb_max' => '50',
		    'unit_id' => '11'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Presión Aceite Hidraúlico',
		    'nb_min' => '1050',
		    'nb_max' => '1350',
		    'unit_id' => '11'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Pres. difer. Filtro Aceite Hidrau',
		    'nb_min' => '10',
		    'nb_max' => '60',
		    'unit_id' => '11'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Pres. Dispáro Válvula Comb. gas',
		    'nb_min' => '20',
		    'nb_max' => '60',
		    'unit_id' => '11'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Pres. difer Filtro Aceite Lubricante',
		    'nb_min' => '5',
		    'nb_max' => '15',
		    'unit_id' => '11'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Pres. Descarga Bba Agua Ppl',
		    'nb_min' => '50',
		    'nb_max' => '70',
		    'unit_id' => '11'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Pres. difer Filtro Aceite Coupling',
		    'nb_min' => '0',
		    'nb_max' => '15',
		    'unit_id' => '11'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Pres. difer Filtro Aceite Control',
		    'nb_min' => '5',
		    'nb_max' => '15',
		    'unit_id' => '11'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Pres. Combustible Gas',
		    'nb_min' => '225',
		    'nb_max' => '350',
		    'unit_id' => '11'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Pres. Gas Válvula Relación',
		    'nb_min' => '150',
		    'nb_max' => '245',
		    'unit_id' => '11'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Pres. Gas Válvula Control',
		    'nb_min' => '100',
		    'nb_max' => '180',
		    'unit_id' => '11'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Pres. Aceite Pedestal Gen',
		    'nb_min' => '15',
		    'nb_max' => '37',
		    'unit_id' => '11'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Temp. Aceite Pedestal Gen',
		    'nb_min' => '125',
		    'nb_max' => '150',
		    'unit_id' => '1'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Pres. Diferec Filtros Aire Gen',
		    'nb_min' => '0.5',
		    'nb_max' => '6',
		    'unit_id' => '12' //AGREGAR A NUEVAS UNIDADES
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Pres. Diferec Filtros Aire Turb',
		    'nb_min' => '0.5',
		    'nb_max' => '6',
		    'unit_id' => '12'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Nivel Tanque de Aceite',
		    'nb_min' => '0.5', //Esta parte representa un valor porcentual. Es decir. 50%
		    'nb_max' => '100', //100%
		    'unit_id' => '13'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Nivel Tanque Gasoil Motor Diesel',
		    'nb_min' => '0.5',  //50%
		    'nb_max' => '100', //100%
		    'unit_id' => '13'
        ]);
        $parameter = Parameter::create([
            'classification_id' => '9',
		    'tx_parameter' => 'Nivel Tanque de Agua Turbina',
		    'nb_min' => '0.5',   //50%
		    'nb_max' => '100', //100%
		    'unit_id' => '13'
        ]);
    }
}
