<?php namespace RainLab\User\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateMailBlockersTable extends Migration
{

    public function up()
    {
        Schema::create('rainlab_user_mail_blockers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email')->index()->nullable();
            $table->string('template')->index()->nullable();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rainlab_user_mail_blockers');
    }

}
