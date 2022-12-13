<?php

namespace Database\Seeders;
use App\Models\Catalogue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatalogueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $catalogue = new Catalogue();
        $catalogue->name = 'Analgesicos';
        $catalogue->description = 'Para calmar el dolor';
        $catalogue->save();

        $catalogue2 = new Catalogue();
        $catalogue2->name = 'Laxantes';
        $catalogue2->description = 'Para purgar todo tus males';
        $catalogue2->save();

        $catalogue3 = new Catalogue();
        $catalogue3->name = 'Antiálergicos';
        $catalogue3->description = 'Para combatir tus alergias';
        $catalogue3->save();

        $catalogue4 = new Catalogue();
        $catalogue4->name = 'Antidiarreicos';
        $catalogue4->description = 'Para calmar la diarrea';
        $catalogue4->save();

        $catalogue5 = new Catalogue();
        $catalogue5->name = 'Antiinflamatorios';
        $catalogue5->description = 'Para bajar la inflamacion';
        $catalogue5->save();

        $catalogue6 = new Catalogue();
        $catalogue6->name = 'Antiinfecciosos';
        $catalogue6->description = 'Para combatir infecciones';
        $catalogue6->save();

        $catalogue9 = new Catalogue();
        $catalogue9->name = 'Mucolitícos';
        $catalogue9->description = 'Para combatir problemas de la mucosa';
        $catalogue9->save();

        $catalogue7 = new Catalogue();
        $catalogue7->name = 'Antiulcerosos';
        $catalogue7->description = 'Para combatir problemas de la ulcera';
        $catalogue7->save();

        $catalogue8 = new Catalogue();
        $catalogue8->name = 'Antipiréticos';
        $catalogue8->description = 'Para calmar la fiebre';
        $catalogue8->save();

    }
}
