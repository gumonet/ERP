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
      $sql = base_path('database/dump/init_config.sql');
       DB::unprepared(file_get_contents($sql));
        // $this->call(UsersTableSeeder::class);
    }
}
