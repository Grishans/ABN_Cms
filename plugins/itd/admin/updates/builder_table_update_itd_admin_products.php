<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateItdAdminProducts extends Migration
{
    public function up()
    {
        Schema::table('itd_admin_products', function($table)
        {
            $table->string('desc_1_page_3', 500);
            $table->string('desc_2_page_3', 500);
            $table->string('desc_3_page_3', 500);
        });
    }
    
    public function down()
    {
        Schema::table('itd_admin_products', function($table)
        {
            $table->dropColumn('desc_1_page_3');
            $table->dropColumn('desc_2_page_3');
            $table->dropColumn('desc_3_page_3');
        });
    }
}
