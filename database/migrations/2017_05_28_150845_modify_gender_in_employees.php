<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// we can change column
// composer require doctrine/dbal
// composer require gloudemans/shoppingcart

class ModifyGenderInEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            //change
            $table->string('gender', 5)->change(); //maintains the varchar data type and sets the character limit to 5.
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
            $table->string('gender', 255)->change(); //rollback the migration to the previous state.
        });
    }
}
