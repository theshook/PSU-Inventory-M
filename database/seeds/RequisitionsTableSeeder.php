<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class RequisitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Requisition');

        for ($i = 0; $i < 50; $i++) {
            DB::table('requisitions')->insert([
                'stock_no' => $faker->randomDigitNotNull(),
                'qty' => $faker->randomDigitNotNull(),
                'unit' => $faker->word(),
                'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
