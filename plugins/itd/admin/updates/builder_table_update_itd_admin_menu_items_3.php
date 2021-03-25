<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateItdAdminMenuItems3 extends Migration
{
    public function up()
    {
        Schema::table('itd_admin_menu_items', function($table)
        {
            $table->dropColumn('text_btn');
        });
    }
    
    public function down()
    {
        Schema::table('itd_admin_menu_items', function($table)
        {
            $table->string('text_btn', 100);
        });
    }
}
