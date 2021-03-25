<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateItdAdminContacts extends Migration
{
    public function up()
    {
        Schema::table('itd_admin_contacts', function($table)
        {
            $table->string('name_form', 200);
        });
    }
    
    public function down()
    {
        Schema::table('itd_admin_contacts', function($table)
        {
            $table->dropColumn('name_form');
        });
    }
}
