<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateItdAdminConsulting2 extends Migration
{
    public function up()
    {
        Schema::table('itd_admin_consulting', function($table)
        {
            $table->string('title_page_3', 100);
            $table->string('desc_page_3', 500);
            $table->string('subtitle_1_page_3', 100);
            $table->string('subtitle_2_page_3', 100);
            $table->string('subtitle_3_page_3', 100);
            $table->string('subdesc_1_page_3', 500);
            $table->string('subdesc_2_page_3', 500);
            $table->string('subdesc_3_page_3', 500);
        });
    }
    
    public function down()
    {
        Schema::table('itd_admin_consulting', function($table)
        {
            $table->dropColumn('title_page_3');
            $table->dropColumn('desc_page_3');
            $table->dropColumn('subtitle_1_page_3');
            $table->dropColumn('subtitle_2_page_3');
            $table->dropColumn('subtitle_3_page_3');
            $table->dropColumn('subdesc_1_page_3');
            $table->dropColumn('subdesc_2_page_3');
            $table->dropColumn('subdesc_3_page_3');
        });
    }
}
