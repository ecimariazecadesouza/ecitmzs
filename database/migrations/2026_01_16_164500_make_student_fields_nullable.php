<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class MakeStudentFieldsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Usando SQL puro para evitar dependência do doctrine/dbal no Laravel 8
        DB::statement('ALTER TABLE users MODIFY COLUMN gender VARCHAR(255) NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN nationality VARCHAR(255) NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN phone VARCHAR(255) NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN address VARCHAR(255) NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN address2 VARCHAR(255) NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN city VARCHAR(255) NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN zip VARCHAR(255) NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN email VARCHAR(255) NULL');

        DB::statement('ALTER TABLE student_parent_infos MODIFY COLUMN father_name VARCHAR(255) NULL');
        DB::statement('ALTER TABLE student_parent_infos MODIFY COLUMN father_phone VARCHAR(255) NULL');
        DB::statement('ALTER TABLE student_parent_infos MODIFY COLUMN mother_name VARCHAR(255) NULL');
        DB::statement('ALTER TABLE student_parent_infos MODIFY COLUMN mother_phone VARCHAR(255) NULL');
        DB::statement('ALTER TABLE student_parent_infos MODIFY COLUMN parent_address VARCHAR(255) NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE users MODIFY COLUMN gender VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN nationality VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN phone VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN address VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN address2 VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN city VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN zip VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE users MODIFY COLUMN email VARCHAR(255) NOT NULL');

        DB::statement('ALTER TABLE student_parent_infos MODIFY COLUMN father_name VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE student_parent_infos MODIFY COLUMN father_phone VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE student_parent_infos MODIFY COLUMN mother_name VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE student_parent_infos MODIFY COLUMN mother_phone VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE student_parent_infos MODIFY COLUMN parent_address VARCHAR(255) NOT NULL');
    }
}
