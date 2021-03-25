<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminContacts extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_contacts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('field_1', 100);
            $table->string('field_2', 100);
            $table->string('field_3', 100);
            $table->string('text_send_btn', 100);
            $table->string('text_move_btn', 100);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_contacts');
    }
}
