<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255)->unique();

            // laravel give null , idk why
            // $table->nullableTimestamps();
            // $table->timestamps();

            // cause laravel given null so this is a fix
            // https://stackoverflow.com/questions/18067614/how-can-i-set-the-default-value-of-a-timestamp-column-to-the-current-timestamp-w
            // or
            // https://laracasts.com/discuss/channels/eloquent/why-table-timestamps-puts-on-update-current-timestamp-on-the-created-at-column
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            
            $table->string('created_at_ip');
            $table->string('updated_at_ip');
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
        Schema::drop('categories');
    }
}
