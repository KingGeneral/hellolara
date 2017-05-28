<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// we want to add a new column to our employees table for gender. 
// We want to add the new column after the contact_number field.

// php artisan make:migration add_gender_to_employees --table=employees
// --table=employees tells Laravel we want to work with an existing table called employees

class AddGenderToEmployess extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->string('gender')->after('contact_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn('gender');
        });
    }
}
