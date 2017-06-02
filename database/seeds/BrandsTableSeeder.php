<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
        						'name'	=> 'ACNE'
        					]);
        DB::table('brands')->insert([
        						'name'	=> 'ZONETM'
        					]);
        DB::table('brands')->insert([
        						'name'	=> 'KINGGENERAL'
        					]);
        DB::table('brands')->insert([
        						'name'	=> 'ZERO'
        					]);
    }
}
