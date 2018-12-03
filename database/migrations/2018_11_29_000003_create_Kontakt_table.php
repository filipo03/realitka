<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontaktTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Kontakt';

    /**
     * Run the migrations.
     * @table Kontakt
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->increments('idKontakt');
            $table->string('Ulica', 45)->nullable();
            $table->string('Mesto', 45);
            $table->string('PSC', 45);
            $table->integer('Supisne_cislo');
            $table->string('email', 45);
            $table->integer('Telefon');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
