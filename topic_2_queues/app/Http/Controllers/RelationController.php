<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class RelationController extends Controller
{
   	public function home()
   	{
   		// $user = User::find(10);
   		// $roleIds = [1,2];

   		// $result = $user->roles()->attach($roleIds); // insert 2 record [10,1], [10,2]
   		
   		// $result = $user->roles()->sync($roleIds); // = createOrUpdate


   		$role = Role::findOrFail(1);
   		$userIds = [9,10];
   		$result = $role->users()->attach($userIds);
   		dd($result);
   	}
}
