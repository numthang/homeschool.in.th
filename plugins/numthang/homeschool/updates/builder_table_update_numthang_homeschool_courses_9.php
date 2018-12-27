<?php namespace Numthang\Homeschool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNumthangHomeschoolCourses9 extends Migration
{
    public function up()
    {
        Schema::table('numthang_homeschool_courses', function($table)
        {
            $table->renameColumn('edu_purpose', 'purpose');
        });
    }
    
    public function down()
    {
        Schema::table('numthang_homeschool_courses', function($table)
        {
            $table->renameColumn('purpose', 'edu_purpose');
        });
    }
}