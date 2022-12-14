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
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id");
            $table->bigInteger("kategori_id")->default(1);
            $table->string("nama");
            $table->text("deskripsi");
            $table->integer("rating")->nullable();
            $table->integer("penilai")->nullable();
            $table->text("gambar")->nullable()->default("user1.png");
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
        Schema::dropIfExists('reseps');
    }
};
