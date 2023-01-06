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
        $medicine->name = 'Paracetamol';
        $medicine->description = 'una paracetamol';
        $medicine->stock = '20';
        $medicine->catalogue_id = '1';
        $medicine->save();

        $medicine = new Medicine();
        $medicine->name = 'Paracetamol';
        $medicine->description = 'una paracetamol';
        $medicine->stock = '20';
        $medicine->catalogue_id = '1';
        $medicine->save();

        $medicine = new Medicine();
        $medicine->name = 'Paracetamol';
        $medicine->description = 'una paracetamol';
        $medicine->stock = '20';
        $medicine->catalogue_id = '1';
        $medicine->save();

        $medicine = new Medicine();
        $medicine->name = 'Paracetamol';
        $medicine->description = 'una paracetamol';
        $medicine->stock = '20';
        $medicine->catalogue_id = '1';
        $medicine->save();

        $medicine = new Medicine();
        $medicine->name = 'Paracetamol';
        $medicine->description = 'una paracetamol';
        $medicine->stock = '20';
        $medicine->catalogue_id = '1';
        $medicine->save();

        $medicine = new Medicine();
        $medicine->name = 'Paracetamol';
        $medicine->description = 'una paracetamol';
        $medicine->stock = '20';
        $medicine->catalogue_id = '1';
        $medicine->save();
    }
}
