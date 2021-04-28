<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateItdAdminContacts4 extends Migration
{
    public function up()
    {
        Schema::table('itd_admin_contacts', function($table)
        {
            $table->string('phone_1', 256)->change();
        });
    }
    
    public function down()
    {
        Schema::table('itd_admin_contacts', function($table)
        {
            $table->string('phone_1', 20)->change();
        });
    }
}
