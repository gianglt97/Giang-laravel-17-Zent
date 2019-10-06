<?php
date_default_timezone_set("Asia/Bangkok");
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('user_id');
            $table->string('title');
            $table->text('content');
            $table->tinyInteger('status');
            $table->dateTimeTz('created_at');
            $table->dateTimeTz('updated_at');
//mình để user_id là dạng số
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
}
