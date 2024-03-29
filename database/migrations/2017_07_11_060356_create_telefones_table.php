<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones', function (Blueprint $table) {
            $table->increments('id');

            $table->string("descricao", 50);
            $table->string("codpais", 8);
            $table->integer("ddd");
            $table->integer("prefixo");
            $table->integer("sufixo");

            $table->integer("pessoa_id")->unsigned();
            $table->foreign("pessoa_id")->references("id")->on("pessoas")->onDelete("cascade");

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
        Schema::dropIfExists('telefones');
    }
}
