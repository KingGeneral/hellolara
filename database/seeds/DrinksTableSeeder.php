<?php

use Illuminate\Database\Seeder;

class DrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //run command
        DB::table('drinks')->insert([
        	'name'		=> 'Vodka',
        	'comments'	=> 'Yeah, vodka love it',
        	'rating'	=> 9,
        	'brew_date'	=> '1973-09-03'
        ]);
    }
}
