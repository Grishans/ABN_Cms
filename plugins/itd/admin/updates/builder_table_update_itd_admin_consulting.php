<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateItdAdminConsulting extends Migration
{
    public function up()
    {
        Schema::table('itd_admin_consulting', function($table)
        {
            $table->renameColumn('subdesc_3_page_3', 'subdesc_3_page_2');
        });
    }
    
    public function down()
    {
        Schema::table('itd_admin_consulting', function($table)
        {
            $table->renameColumn('subdesc_3_page_2', 'subdesc_3_page_3');
        });
    }
}
