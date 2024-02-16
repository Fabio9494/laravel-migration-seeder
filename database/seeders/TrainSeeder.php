<?php

namespace Database\Seeders;




use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<20;$i++)
        {
            $newTrain = new Train();

            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->randomElement(['Roma','Milano','Torino']);
            $newTrain->stazione_di_arrivo = $faker->randomElement(['Firenze','Napoli','Genova']);
            $newTrain->data = $faker->dateTimeBetween('-3 days','+3 days');
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->randomNumber(4,true);
            $newTrain->numero_carrozze = $faker->randomDigit();
            $newTrain->in_orario = $faker->boolean();;
            $newTrain->cancellato = $faker->boolean();;
            $newTrain->save();
        }
    }
    
    
}