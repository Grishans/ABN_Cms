<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminMenuItems extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_menu_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('item_1', 100);
            $table->string('item_2', 100);
            $table->string('item_3', 100);
            $table->string('item_4', 100);
            $table->string('item_5', 100);
            $table->string('item_6', 100);
            $table->string('item_7', 100);
            $table->string('item_8', 100);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_menu_items');
    }
}
