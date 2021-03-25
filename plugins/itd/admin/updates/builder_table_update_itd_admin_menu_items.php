<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateItdAdminMenuItems extends Migration
{
    public function up()
    {
        Schema::table('itd_admin_menu_items', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('itd_admin_menu_items', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
