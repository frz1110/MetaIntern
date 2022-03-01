<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class IsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 60; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('bahan')->insert([
    			'nama' => $faker->word,
    			'resep' => $faker->numberBetween(1,8),	
    		]);

            DB::table('langkah')->insert([
    			'nama' => $faker->text($maxNbChars = 100),
    			'resep' => $faker->numberBetween(1,8),	
    		]);
    }
}
}
