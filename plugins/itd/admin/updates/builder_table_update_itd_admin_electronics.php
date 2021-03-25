<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateItdAdminElectronics extends Migration
{
    public function up()
    {
        Schema::table('itd_admin_electronics', function($table)
        {
            $table->string('subdesc_page_2', 500)->change();
        });
    }
    
    public function down()
    {
        Schema::table('itd_admin_electronics', function($table)
        {
            $table->string('subdesc_page_2', 100)->change();
        });
    }
}
