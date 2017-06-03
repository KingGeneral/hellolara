<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeptIdInEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            // add foreign key 
            // We need to use Schema’s unsignedInteger when creating dept_id so that both the primary and foreign keys will be INT(10).
            // $table-> unsignedInteger ('dept_id')->after('gender');
            $table->integer('dept_id')->unsigned()->nullable()->after('gender');
            $table->foreign('dept_id')
            ->references('id')->on('depts')
            ->onDelete('cascade');
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
            //delete column dept_id
            // $table->dropForeign('dept_id_foreign');
            $table->dropForeign('employees_dept_id_foreign');
            $table->dropColumn('dept_id');
        });
    }
}
