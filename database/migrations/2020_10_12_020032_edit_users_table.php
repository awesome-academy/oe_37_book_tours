<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->change();
            $table->text('address')->nullable()->change();
        });
    }
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->change();
            $table->text('address')->change();
        });
    }
}
