<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateItdAdminMainPage extends Migration
{
    public function up()
    {
        Schema::table('itd_admin_main_page', function($table)
        {
            $table->string('title_page_2', 100);
            $table->string('subtitle_1_page_2', 100);
            $table->string('subtitle_2_page_2', 100);
            $table->string('subtitle_3_page_2', 100);
            $table->string('subdesc_1_page_2', 500);
            $table->string('subdesc_2_page_2', 500);
            $table->string('subdesc_3_page_2', 500);
            $table->string('title_page_1', 100)->change();
            $table->string('desc_page_1', 500)->change();
        });
    }
    
    public function down()
    {
        Schema::table('itd_admin_main_page', function($table)
        {
            $table->dropColumn('title_page_2');
            $table->dropColumn('subtitle_1_page_2');
            $table->dropColumn('subtitle_2_page_2');
            $table->dropColumn('subtitle_3_page_2');
            $table->dropColumn('subdesc_1_page_2');
            $table->dropColumn('subdesc_2_page_2');
            $table->dropColumn('subdesc_3_page_2');
            $table->string('title_page_1', 200)->change();
            $table->string('desc_page_1', 191)->change();
        });
    }
}
