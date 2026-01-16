<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeStudentFieldsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('gender')->nullable()->change();
            $table->string('nationality')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->string('address2')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->string('zip')->nullable()->change();
            $table->string('email')->nullable()->change();
        });

        Schema::table('student_parent_infos', function (Blueprint $table) {
            $table->string('father_name')->nullable()->change();
            $table->string('father_phone')->nullable()->change();
            $table->string('mother_name')->nullable()->change();
            $table->string('mother_phone')->nullable()->change();
            $table->string('parent_address')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('gender')->nullable(false)->change();
            $table->string('nationality')->nullable(false)->change();
            $table->string('phone')->nullable(false)->change();
            $table->string('address')->nullable(false)->change();
            $table->string('address2')->nullable(false)->change();
            $table->string('city')->nullable(false)->change();
            $table->string('zip')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
        });

        Schema::table('student_parent_infos', function (Blueprint $table) {
            $table->string('father_name')->nullable(false)->change();
            $table->string('father_phone')->nullable(false)->change();
            $table->string('mother_name')->nullable(false)->change();
            $table->string('mother_phone')->nullable(false)->change();
            $table->string('parent_address')->nullable(false)->change();
        });
    }
}
