<?php

use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ConnectRelationshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    /**
	     * Get Available Permissions
	     *
	     */
		$permissions = Permission::all();

		$userPermissions = Permission::whereIn('slug', ['view.news', 'create.news', 'create.comments'])->get();

	    /**
	     * Attach Permissions to Roles
	     *
	     */
		$roleAdmin = Role::where('name', '=', 'Admin')->first();
		foreach ($permissions as $permission) {
			$roleAdmin->attachPermission($permission);
		}

    	$roleUser = Role::where('name', '=', 'User')->first();
		foreach ($userPermissions as $permission) {
			$roleUser->attachPermission($permission);
		}

    }

}