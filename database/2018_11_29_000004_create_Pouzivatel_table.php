<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePouzivatelTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Pouzivatel';

    /**
     * Run the migrations.
     * @table Pouzivatel
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idKonto_realitka');
            $table->string('Názov predajcu', 45);
            $table->integer('ICO/DIC')->nullable();
            $table->integer('Login_id user');
            $table->integer('Kontakt_idKontakt1');

            $table->index(["Login_id user"], 'fk_Konto_realitka_Login1_idx');

            $table->index(["Kontakt_idKontakt1"], 'fk_Konto_realitka_Kontakt1_idx');


            $table->foreign('Login_id user', 'fk_Konto_realitka_Login1_idx')
                ->references('iduser')->on('Login')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Kontakt_idKontakt1', 'fk_Konto_realitka_Kontakt1_idx')
                ->references('idKontakt')->on('Kontakt')
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
