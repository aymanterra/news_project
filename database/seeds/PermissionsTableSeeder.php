<?php

use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    /**
	     * Add Permissions
	     *
	     */
	    
        if (Permission::where('name', '=', 'Can Access Admin Panel')->first() === null) {
			Permission::create([
			    'name' => 'Can Access Admin Panel',
			    'slug' => 'access.adminPanel',
			    'description' => 'Can access admin panel',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Can View Users')->first() === null) {
			Permission::create([
			    'name' => 'Can View Users',
			    'slug' => 'view.users',
			    'description' => 'Can view users',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Can Create Users')->first() === null) {
			Permission::create([
			    'name' => 'Can Create Users',
			    'slug' => 'create.users',
			    'description' => 'Can create new users',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Can Edit Users')->first() === null) {
			Permission::create([
			    'name' => 'Can Edit Users',
			    'slug' => 'edit.users',
			    'description' => 'Can edit users',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Can Delete Users')->first() === null) {
			Permission::create([
			    'name' => 'Can Delete Users',
			    'slug' => 'delete.users',
			    'description' => 'Can delete users',
			    'model' => 'Permission',
			]);
        }
	    
        if (Permission::where('name', '=', 'Can View Roles')->first() === null) {
			Permission::create([
			    'name' => 'Can View Roles',
			    'slug' => 'view.roles',
			    'description' => 'Can view roles',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Can Create Roles')->first() === null) {
			Permission::create([
			    'name' => 'Can Create Roles',
			    'slug' => 'create.roles',
			    'description' => 'Can create new roles',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Can Edit Roles')->first() === null) {
			Permission::create([
			    'name' => 'Can Edit Roles',
			    'slug' => 'edit.roles',
			    'description' => 'Can edit roles',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Can Delete Roles')->first() === null) {
			Permission::create([
			    'name' => 'Can Delete Roles',
			    'slug' => 'delete.roles',
			    'description' => 'Can delete roles',
			    'model' => 'Permission',
			]);
        }
	    
        if (Permission::where('name', '=', 'Can View News')->first() === null) {
			Permission::create([
			    'name' => 'Can View News',
			    'slug' => 'view.news',
			    'description' => 'Can view news',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Can Create News')->first() === null) {
			Permission::create([
			    'name' => 'Can Create News',
			    'slug' => 'create.news',
			    'description' => 'Can create new news',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Can Edit News')->first() === null) {
			Permission::create([
			    'name' => 'Can Edit News',
			    'slug' => 'edit.news',
			    'description' => 'Can edit news',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Can Delete News')->first() === null) {
			Permission::create([
			    'name' => 'Can Delete News',
			    'slug' => 'delete.news',
			    'description' => 'Can delete news',
			    'model' => 'Permission',
			]);
        }
	    
        if (Permission::where('name', '=', 'Can View Comments')->first() === null) {
			Permission::create([
			    'name' => 'Can View Comments',
			    'slug' => 'view.comments',
			    'description' => 'Can view comments',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Can Create Comments')->first() === null) {
			Permission::create([
			    'name' => 'Can Create Comments',
			    'slug' => 'create.comments',
			    'description' => 'Can create new comments',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Can Edit Comments')->first() === null) {
			Permission::create([
			    'name' => 'Can Edit Comments',
			    'slug' => 'edit.comments',
			    'description' => 'Can edit comments',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Can Delete Comments')->first() === null) {
			Permission::create([
			    'name' => 'Can Delete Comments',
			    'slug' => 'delete.comments',
			    'description' => 'Can delete comments',
			    'model' => 'Permission',
			]);
        }

    }
}
