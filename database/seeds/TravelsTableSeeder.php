<?php

use Illuminate\Database\Seeder;
use App\Travel;
class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travel = new Travel();

        $travel->destination = 'Miami';
        $travel->resort_name = 'Miami Resort';
        $travel->origin_airport = 'Cagliari';
        $travel->duration_days = 12;
        $travel->insured = true;
        $travel->rating = 8;
        $travel->price = 800.72;

        $travel->save();
    }
}
