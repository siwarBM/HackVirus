<?php namespace Hackethon\Shop\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class BuilderTableUpdateHackethonShop3 extends Migration
{
    public function up()
    {
        Schema::table('hackethon_shop_', function($table)
        {
            $table->integer('order')->default(null)->change();
            $table->string('courrier', 191)->default('null')->change();
            $table->text('details')->default('null')->change();
            $table->dropColumn('slug');
        });
    }
    
    public function down()
    {
        Schema::table('hackethon_shop_', function($table)
        {
            $table->integer('order')->default(NULL)->change();
            $table->string('courrier', 191)->default('\'null\'')->change();
            $table->text('details')->default('NULL')->change();
            $table->integer('slug')->nullable()->default(NULL);
        });
    }
}
