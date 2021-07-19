<?php namespace Hackethon\Shop\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class BuilderTableUpdateHackethonShop extends Migration
{
    public function up()
    {
        Schema::table('hackethon_shop_', function($table)
        {
            $table->string('slug')->nullable();
            $table->integer('order')->default(null)->change();
            $table->string('courrier', 191)->default('null')->change();
            $table->text('details')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('hackethon_shop_', function($table)
        {
            $table->dropColumn('slug');
            $table->integer('order')->default(NULL)->change();
            $table->string('courrier', 191)->default('NULL')->change();
            $table->text('details')->default('NULL')->change();
        });
    }
}
