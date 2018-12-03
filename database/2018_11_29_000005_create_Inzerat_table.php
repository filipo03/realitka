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
            $table->integer('Poloha_idPoloha');
            $table->integer('Nehnutelnost_idBudova');
            $table->integer('Konto_realitka_idKonto_realitka');
            $table->date('Datum');

            $table->index(["Poloha_idPoloha"], 'fk_Inzerat_Poloha1_idx');

            $table->index(["Nehnutelnost_idBudova"], 'fk_Inzerat_Nehnutelnost1_idx');

            $table->index(["Konto_realitka_idKonto_realitka"], 'fk_Inzerat_Konto_realitka1_idx');


            $table->foreign('Poloha_idPoloha', 'fk_Inzerat_Poloha1_idx')
                ->references('idPoloha')->on('Poloha')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Nehnutelnost_idBudova', 'fk_Inzerat_Nehnutelnost1_idx')
                ->references('idBudova')->on('Nehnutelnost')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Konto_realitka_idKonto_realitka', 'fk_Inzerat_Konto_realitka1_idx')
                ->references('idKonto_realitka')->on('Pouzivatel')
                ->onDelete('no action')
                ->onUpdate('no action');
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
