<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminProducts extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title_page_1', 100);
            $table->string('desc_page_1', 500);
            $table->string('title_page_2', 100);
            $table->string('desc_page_2', 500);
            $table->string('title_1_page_3', 100);
            $table->string('title_2_page_3', 100);
            $table->string('title_3_page_3', 100);
            $table->string('title_page_4', 100);
            $table->string('desc_page_4', 500);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_products');
    }
}
