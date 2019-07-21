<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'user' => 'admin',  
            'level' => '1',
            'company' => '1',
            'stop_idstop' => '1' ,
            'pass'=>Hash::make('Admin123')]);

        DB::table('bus')->insert([
            'licenseplate' => 'SD3434S',  
            'brand' => 'HONDA',
            'year' => '2017',
            'capacity' => '65' ,
            'notes'=>'Muy Confortable']);

        DB::table('bus')->insert([
            'licenseplate' => 'DVVD212',  
            'brand' => 'BMW',
            'year' => '2017',
            'capacity' => '65' ,
            'notes'=>'Muy Confortable']);

        DB::table('bus')->insert([
            'licenseplate' => '52452452',  
            'brand' => 'BMW',
            'year' => '2015',
            'capacity' => '65' ,
            'notes'=>'Muy Confortable']);

        DB::table('bus')->insert([
            'licenseplate' => 'SSS4346',  
            'brand' => 'MERCEDE',
            'year' => '2018',
            'capacity' => '65' ,
            'notes'=>'Muy Confortable']);
        
    }
}
