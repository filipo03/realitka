<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKontaktToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table){
            $table->string('Ulica', 45)->nullable();
            $table->string('Mesto', 45);
            $table->string('PSC', 45);
            $table->integer('Supisne_cislo');
            $table->string('Telefon',11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('Ulica');
            $table->dropColumn('Mesto');
            $table->dropColumn('PSC');
            $table->dropColumn('Supisne_cislo');
            $table->dropColumn('Telefon');
        });
    }
}
