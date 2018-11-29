<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNehnutelnostTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Nehnutelnost';

    /**
     * Run the migrations.
     * @table Nehnutelnost
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idBudova');
            $table->enum('Typ', ['Rod._dom', 'Byt', 'Kancelaria', 'Pozemok', 'Kancelarska_budova']);
            $table->double('Rozloha');
            $table->integer('Pocet_miestnosti')->nullable();
            $table->enum('Material', ['Tehla', 'Panel', 'Drevo', 'Kamen'])->nullable();
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
