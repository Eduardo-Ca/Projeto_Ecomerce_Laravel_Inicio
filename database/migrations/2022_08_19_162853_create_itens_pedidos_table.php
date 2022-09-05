<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Decimal;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_pedidos', function (Blueprint $table) {
            $table->increments("id");

            $table->integer("quantidade");
            $table->decimal("valor",10,2);
            $table->datetime("dt_item");

            $table->integer("produto_id")->unsigned();
            $table->integer("pedido_id")->unsigned();

            $table->timestamps();

            $table->foreign("produto_id")
                ->references("id")
                ->on("produtos")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itens_pedidos');
    }
};
