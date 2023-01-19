<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class trainsTableSeeder extends Seeder
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
                'start_city' => 'Napoli',
                'end_city' => 'Milano'
            ],
            [
                'start_city' => 'Roma',
                'end_city' => 'Torino'
            ],
            [
                'start_city' => 'Diamante',
                'end_city' => 'Firenze'
            ]
        ];

        foreach($trains as $elem){
            $newTrain = new Train();
            $newTrain->start_city = $elem['start_city'];
            $newTrain->end_city = $elem['end_city'];
            $newTrain->save();

        }
    }
}
