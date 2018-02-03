<?php

namespace App;

use jeremykenedy\LaravelRoles\Models\Role as JeremykenedyRole;

class Role extends JeremykenedyRole
{
    // check if the role has permision id 
    public function roleHasPermission($permission)
    {
    	foreach ($this->permissions as $rolePermission) {
    		if($rolePermission->id === $permission) {
    			return true;
    		}
    	}

    }
}
