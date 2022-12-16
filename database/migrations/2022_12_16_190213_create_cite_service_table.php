<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cite_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cite_id');
            $table->unsignedBigInteger('service_id');

            $table->foreign('cite_id')
                ->references('id')
                ->on('cites')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('cite_service');
    }
};
