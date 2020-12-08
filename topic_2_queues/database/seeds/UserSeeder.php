<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i<= 10 ; $i++){
        	DB::table('users')->insert([
        		'name' => "Le van A".$i,
        		'email' => "A".$i."@gmail.com",
        		'password' => bcrypt("user".$i),
        	]);
        }
    }
}
