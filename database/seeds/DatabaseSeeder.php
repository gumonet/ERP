<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


	    factory(\App\Language::class, 1)->create(['code'=>'es']);
	    factory(\App\GeneralSetting::class, 1 )->create([
	    	'site_title' => 'ERP - Gumonet',
		    'site_logo'  => 'logo.png',
		    'currency'   => 'MXN',
		    'staff_access' => 'own',
		    'date_format' => 'd/m/Y',
		    'theme' => 'default.css',
		    'currency_position' => 'prefix'
	    ]);
	    factory(\App\Roles::class, 1 )->create([
		    'name' => 'Admin',
		    'description' => 'admin can access all data...',
		    'guard_name' => 'web',
		    'is_active' => 1,
	    ]);

	    //Roles created
	    factory(\App\Roles::class, 1 )->create([
		    'name' => 'Admin',
		    'description' => 'admin can access all data...',
		    'guard_name' => 'web',
		    'is_active' => 1,
	    ]);
	    factory(\App\Roles::class, 1 )->create([
		    'name' => 'Owner',
		    'description' => 'Owner of shop...',
		    'guard_name' => 'web',
		    'is_active' => 1,
	    ]);
	    factory(\App\Roles::class, 1 )->create([
		    'name' => 'Staff',
		    'description' => 'staff has specific acess...',
		    'guard_name' => 'web',
		    'is_active' => 1,
	    ]);

	    //Users
	    factory(\App\User::class, 1 )->create([
		    'name' => 'Admin',
		    'email' => 'admin@admin.com',
		    'password' => '$2y$10$DWAHTfjcvwCpOCXaJg11MOhsqns03uvlwiSUOQwkHL2YYrtrXPcL6',
		    'remember_token' => 'fTk2ZyWLTqjDSTSv6hRGqC0sCEHmsFcHhPv2tyUtWPLyVMIaOs7SZWQj0rmR',
		    'phone' => '9211547895',
		    'company_name' => 'Gumonet SI',
		    'role_id' => '1',
		    /*'biller_id' => '',
		    'warehouse_id' => '',*/
		    'is_active' => 1,

	    ]);
        // $this->call(UsersTableSeeder::class);
    }
}
