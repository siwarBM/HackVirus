<?php namespace Hackethon\Shop\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class BuilderTableCreateHackethonShop extends Migration
{
    public function up()
    {
        Schema::create('hackethon_shop_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('order')->nullable();
            $table->string('courrier')->nullable();
            $table->text('details')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hackethon_shop_');
    }
}
