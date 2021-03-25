<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateItdAdminConsulting4 extends Migration
{
    public function up()
    {
        Schema::table('itd_admin_consulting', function($table)
        {
            $table->string('title_page_3', 500)->change();
        });
    }
    
    public function down()
    {
        Schema::table('itd_admin_consulting', function($table)
        {
            $table->string('title_page_3', 100)->change();
        });
    }
}
