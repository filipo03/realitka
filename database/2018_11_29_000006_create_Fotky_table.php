<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotkyTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Fotky';

    /**
     * Run the migrations.
     * @table Fotky
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idFotky');
            $table->string('Popis')->nullable();
            $table->string('URL');
            $table->integer('Inzerat_idInzerat');

            $table->index(["Inzerat_idInzerat"], 'fk_Fotky_Inzerat1_idx');


            $table->foreign('Inzerat_idInzerat', 'fk_Fotky_Inzerat1_idx')
                ->references('idInzerat')->on('Inzerat')
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
