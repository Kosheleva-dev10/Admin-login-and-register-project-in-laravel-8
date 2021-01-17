<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class _admin_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('_admin_users')->insert([
        	'username'=>'vivekraj',
        	'email'=>'vivekrajraja@gmail.com',
        	'password'=>Hash::make('123456')
        ]);
    }
}
