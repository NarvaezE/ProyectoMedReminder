<?php

namespace Database\Seeders;
use App\Models\Medicine;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medicine = new Medicine();
        $medicine->name = 'Paracetamol';
        $medicine->description = 'una paracetamol';
        $medicine->stock = '20';
        $medicine->catalogue_id = '1';
        $medicine->save();

        $medicine = new Medicine();
        $medicine->name = 'Remotiv';
        $medicine->description = 'Medicamento para limpiar tu organismo';
        $medicine->stock = '10';
        $medicine->catalogue_id = '2';
        $medicine->save();

        $medicine = new Medicine();
        $medicine->name = 'Loratadina';
        $medicine->description = 'Medicamento para aliviar alergias cotidianas';
        $medicine->stock = '25';
        $medicine->catalogue_id = '3';
        $medicine->save();

        $medicine = new Medicine();
        $medicine->name = 'Treda';
        $medicine->description = 'Medicamento para aliviar problemas estomacales';
        $medicine->stock = '20';
        $medicine->catalogue_id = '4';
        $medicine->save();

        $medicine = new Medicine();
        $medicine->name = 'Ibuprofeno';
        $medicine->description = 'Medicamento que alivia los problemas de inflamacion';
        $medicine->stock = '20';
        $medicine->catalogue_id = '5';
        $medicine->save();

        $medicine = new Medicine();
        $medicine->name = 'Cotrimazol';
        $medicine->description = 'Medicamento para tratar infecciones exteriores';
        $medicine->stock = '20';
        $medicine->catalogue_id = '6';
        $medicine->save();

        $medicine = new Medicine();
        $medicine->name = 'Genoprazol';
        $medicine->description = 'Medicamento para el tratamiento de gastritis';
        $medicine->stock = '20';
        $medicine->catalogue_id = '7';
        $medicine->save();
    }
}
