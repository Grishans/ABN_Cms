<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminSocials extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_socials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 100);
            $table->string('url', 256);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_socials');
    }
}
