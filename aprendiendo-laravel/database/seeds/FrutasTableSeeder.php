<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FrutasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i <= 20; $i++) { 
            DB::table('frutas')->insert([
                'nombre' => Str::random(10),
                'descripcion' => Str::random(10),
                'precio' => $faker->randomNumber(2),
                'fecha' => $faker->dateTime()
            ]);
        }

        $this->command->info('La tabla de frutas ha sido rellenada');
    }
}
