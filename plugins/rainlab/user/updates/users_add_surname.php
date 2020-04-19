<?php namespace RainLab\User\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class UsersAddSurname extends Migration
{
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('surname')->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasColumn('users', 'surname')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('surname');
            });
        }
    }
}
