<?php namespace RainLab\User\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class UsersAddGuestFlag extends Migration
{
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->boolean('is_guest')->default(false);
        });
    }

    public function down()
    {
        if (Schema::hasColumn('users', 'is_guest')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('is_guest');
            });
        }
    }
}
