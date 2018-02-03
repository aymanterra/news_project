<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
	     * Add Statuses
	     *
	     */

    	if (Status::where('name', '=', 'Waiting')->first() === null) {
	        Status::create([
	            'name' => 'Waiting',
	        ]);
	    }
	    
    	if (Status::where('name', '=', 'Approved')->first() === null) {
	        Status::create([
	            'name' => 'Approved',
        	]);
	    }

    	if (Status::where('name', '=', 'Disapproved')->first() === null) {
	        Status::create([
	            'name' => 'Disapproved',
	        ]);
	    }
    }
}
