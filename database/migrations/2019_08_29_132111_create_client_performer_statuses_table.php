<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientPerformerStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_performer_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('performer_id');
            $table->string('name');
            $table->string('description');
            $table->boolean('is_final');
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
        Schema::dropIfExists('client_performer_statuses');
    }
}
