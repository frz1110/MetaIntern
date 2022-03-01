<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ResepSeeder extends Seeder
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
 
    // insert data ke table pegawai menggunakan Faker
        DB::table('users')->insert([
            'name' => "Farzana",
            'email' => "user1@gmail.com",
            'password' => "farzana345"
        ]);

        DB::table('users')->insert([
            'name' => "Hadifa",
            'email' => "user2@gmail.com",
            'password' => "farzana345"
        ]);

    	for($i = 1; $i <= 10; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('resep')->insert([
    			'nama' => "Rendang Padang",
    			'image_path' => "https://cdn-2.tstatic.net/tribunnews/foto/bank/images/resep-rendang.jpg",
    			'pembuat' => $faker->numberBetween(1,2),
    			'deskripsi' => $faker->text
    		]);
    }
}
}