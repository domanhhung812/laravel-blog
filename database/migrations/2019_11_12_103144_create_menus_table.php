<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('mn_name')->unique()->nullable();
           $table->string('mn_slug');
           $table->integer('mn_parent_id')->default(0);
           $table->tinyInteger('mn_hot')->default(0);
           $table->tinyInteger('mn_active')->default(0);
           $table->string('mn_avatar')->nullable();
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
        Schema::dropIfExists('menus');
    }
}
