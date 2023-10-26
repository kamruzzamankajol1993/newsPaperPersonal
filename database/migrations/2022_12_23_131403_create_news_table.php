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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->nullable();
            $table->text('title');
            $table->text('op_title')->nullable();
            $table->text('caption')->nullable();
            $table->string('writer_name',150)->nullable();
            $table->text('paragraph');
            $table->integer('total_view')->default(0);
            $table->integer('total_share')->default(0);
            $table->integer('status')->default(1);
            $table->text('cover_image')->nullable();
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
        Schema::dropIfExists('news');
    }
};
