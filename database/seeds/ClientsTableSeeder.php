<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('clients')->insert([
		    'name' => 'Константин',
		    'sername' => 'Егорович',
		    'second_name' => 'Константинов',
		    'phone' => '=375 29 755 55',
		    'status' => 'Заполнил анкету',
	    ]);
		DB::table('clients')->insert([
		    'name' => 'Константин',
		    'sername' => 'Егорович',
		    'second_name' => 'Константинов',
		    'phone' => '=375 29 755 55',
		    'status' => 'Заполнил анкету',
	    ]);
		DB::table('clients')->insert([
		    'name' => 'Константин',
		    'sername' => 'Егорович',
		    'second_name' => 'Константинов',
		    'phone' => '=375 29 755 55',
		    'status' => 'Заполнил анкету',
	    ]);
    }
}
