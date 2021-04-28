<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminNotFound extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_not_found', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('desc');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_not_found');
    }
}
