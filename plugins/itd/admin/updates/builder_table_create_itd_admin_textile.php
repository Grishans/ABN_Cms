<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminTextile extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_textile', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title_page_1', 100);
            $table->string('desc_page_1', 500);
            $table->string('title_page_2', 100);
            $table->string('desc_page_2', 500);
            $table->string('subtitle_1_page_2', 100);
            $table->string('subtitle_2_page_2', 100);
            $table->string('subtitle_3_page_2', 100);
            $table->string('subdesc_1_page_2', 500);
            $table->string('subdesc_2_page_2', 500);
            $table->string('subdesc_3_page_2', 500);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_textile');
    }
}
