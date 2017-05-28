<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //up
        Schema::create('drinks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',75)->unique(); //column as unique
            $table->text('comments')->nullable(); //accept null values
            $table->integer('rating');
            $table->date('brew_date');
            $table->timestamps(); //automatically create created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop
        Schema::drop('drinks');
    }
}
