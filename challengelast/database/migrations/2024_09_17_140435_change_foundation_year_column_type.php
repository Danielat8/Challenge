<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class ChangeFoundationYearColumnType extends Migration
{
    public function up()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->integer('foundation_year')->change();
        });
    }

    public function down()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->year('foundation_year')->change();
        });
    }
}
