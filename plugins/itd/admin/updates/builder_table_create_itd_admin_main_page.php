<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminMainPage extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_main_page', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title_page_1', 200);
            $table->string('desc_page_1');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_main_page');
    }
}
