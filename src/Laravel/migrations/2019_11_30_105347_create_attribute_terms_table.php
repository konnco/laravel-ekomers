<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_terms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->tinyInteger('display_type')->default(0)->comment('1 - color, 2 - image, 3 - text_block'); //color, image, text_block
            $table->string('color_hex')->nullable()->comment('color hex, used when selected display_type is color');
            $table->string('thumbnail')->nullable()->comment('used when selected display_type is image');
            $table->string('text')->nullable()->comment('used when selected display_type is text_block');
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
        Schema::dropIfExists('onimages');
    }
}
