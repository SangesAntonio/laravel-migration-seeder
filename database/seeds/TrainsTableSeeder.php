<?php

use Illuminate\Database\Seeder;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'azienda' => 'Italo',
                'stazione_di_partenza' => 'Napoli',
                'stazione_di_arrivo' => 'Milano',
                'orario_di_partenza' => '10:00',
                'orario_di_arrivo' => '12:30',
                'codice_treno' => '647838233',
                'carrozza_in_orario' => false,
                'cancellato' => false,

            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Napoli',
                'stazione_di_arrivo' => 'Roma',
                'orario_di_partenza' => '20:00',
                'orario_di_arrivo' => '22:30',
                'codice_treno' => '648920323',
                'carrozza_in_orario' => false,
                'cancellato' => false,

            ],

        ];

        foreach ($trains as $train) {
            $new_train = new Train();
            $new_train->fill($train);
            $new_train->save();
        }
    }
}
