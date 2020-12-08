<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   		// DB::table('roles')->insert([
   		// 	'name' => 'supperAdmin',
   		// ]);
   		// DB::table('roles')->insert([
     //   			'name' => 'admin',
     //  ]);
   		// DB::table('roles')->insert([
     //   			'name' => 'user',
     //  ]);


      for($i = 1 ; $i <= 10; $i++){
     		$roleId = rand(1,3);
        $userId = rand(1,10);
     		DB::table('role_users')->insert([
     			'user_id' => $userId,
     			'role_id' => $roleId,
     		]);
     	}
    }
}
