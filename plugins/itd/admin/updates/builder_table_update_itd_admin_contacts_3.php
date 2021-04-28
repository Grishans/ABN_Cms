<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateItdAdminContacts3 extends Migration
{
    public function up()
    {
        Schema::table('itd_admin_contacts', function($table)
        {
            $table->string('phone_1', 20);
        });
    }
    
    public function down()
    {
        Schema::table('itd_admin_contacts', function($table)
        {
            $table->dropColumn('phone_1');
        });
    }
}
