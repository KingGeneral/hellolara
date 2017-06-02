<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //up
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('contact_number');
            $table->timestamps();
        });

        //create an employees table and add 33 seed records using Faker Library

        $faker = Faker\Factory::create(); //creates an instance of Faker factory

        $limit = 33; // limit add to the database.

        // generates a fake
        for ($i=0; $i < $limit; $i++) { 
            DB::table('employees')->insert([
                'name'              => $faker->name,
                'email'             => $faker->unique()->email,
                'contact_number'    => $faker->phoneNumber,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop
        Schema::drop('employees');
    }
}
