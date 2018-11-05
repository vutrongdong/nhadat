<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryBlogMigrate extends Migration
{  /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_blogs', function (Blueprint $table) {
            $table->increments('id')->unsigned()->index();
            $table->string('name');
            $table->string('slug')->index();
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
        Schema::dropIfExists('category_blogs');
    }
}
