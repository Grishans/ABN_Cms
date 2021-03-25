<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateItdAdminIndEquipment extends Migration
{
    public function up()
    {
        Schema::table('itd_admin_ind_equipment', function($table)
        {
            $table->text('desc_page_1')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('desc_page_2')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('desc_1_page_3')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('desc_2_page_3')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('desc_page_4')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('itd_admin_ind_equipment', function($table)
        {
            $table->string('desc_page_1', 500)->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('desc_page_2', 500)->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('desc_1_page_3', 500)->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('desc_2_page_3', 500)->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('desc_page_4', 500)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
