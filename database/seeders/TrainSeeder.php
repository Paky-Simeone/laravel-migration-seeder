<?php

namespace Database\Seeders;

use App\Models\Train;
use App\Http\Controllers\TrainController;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 10000; $i++ ){
        $train = new Train();

        $train->Azienda = $faker->company();
        $train->Stazione_di_partenza = $faker->address();
        $train->Stazione_di_scalo = $faker->address();
        $train->Stazione_di_arrivo = $faker->address();
        $train->Orario_di_partenza = $faker->date() . " " . $faker->time();
        $train->Orario_di_arrivo = $faker->date() . " " . $faker->time();

        $train_code = "";  
        for ($y = 0; $y < 5; $y++) {
            $train_code .= $faker->randomLetter();
        }
        $train->Codice_Treno = $train_code;
      
        $train->Numero_Carrozze = $faker->numberBetween(4,30);
        $train->save();
        }
        
    }
}

    // foreach ($trains_data as $train_data) {
    //    $train = new Train;
    //    $train->fill($train_data);
    //    $train->Azienda = $trains_data['Azienda'];
    //    $train->Stazione_di_partenza = $trains_data['Stazione_di_partenza'];
    //    $train->Stazione_di_scalo = $trains_data['Stazione_di_scalo'];
    //    $train->Stazione_di_arrivo = $trains_data['Stazione_di_arrivo'];
    //    $train->Orario_di_partenza = $trains_data['Orario_di_partenza'];
    //    $train->Orario_di_arrivo = $trains_data['Orario_di_arrivo'];
    //    $train->Codice_Treno = $trains_data['Codice_Treno'];
    //    $train->Numero_Carrozze = $trains_data['Numero_Carrozze'];
       
    //    $train->save();

    
