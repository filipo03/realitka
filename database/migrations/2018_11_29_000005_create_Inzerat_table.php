<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInzeratTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'nehnutelnosts';

    /**
     * Run the migrations.
     * @table Inzerat
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->increments('idInzerat');
            $table->string('Nazov', 45);
            $table->double('Cena');
            $table->string('Popis');
            $table->enum('Typ', ['Rod._dom', 'Byt', 'Kancelaria', 'Pozemok', 'Kancelarska_budova']);
            $table->double('Rozloha');
            $table->integer('Pocet_miestnosti')->nullable();
            $table->enum('Material', ['Tehla', 'Panel', 'Drevo', 'Kamen'])->nullable();
            $table->integer('Konto_realitka_idKonto_realitka');
            $table->date('Datum');
            $table->string('Ulica', 45)->nullable();
            $table->string('Mesto', 45);
            $table->integer('PSC');
            $table->integer('Supisne_cislo');



            $table->index(["Konto_realitka_idKonto_realitka"], 'fk_Inzerat_Konto_realitka1_idx');

$table->foreign('Konto_realitka_idKonto_realitka', 'fk_Inzerat_Konto_realitka1_idx')
                ->references('idKonto_realitka')->on('Pouzivatel')
                ->onDelete('no action')
                ->onUpdate('no action');

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
