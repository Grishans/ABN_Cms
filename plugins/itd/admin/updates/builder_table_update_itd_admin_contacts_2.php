<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateItdAdminContacts2 extends Migration
{
    public function up()
    {
        Schema::table('itd_admin_contacts', function($table)
        {
            $table->string('address', 200);
            $table->string('email', 256);
        });
    }
    
    public function down()
    {
        Schema::table('itd_admin_contacts', function($table)
        {
            $table->dropColumn('address');
            $table->dropColumn('email');
        });
    }
}
