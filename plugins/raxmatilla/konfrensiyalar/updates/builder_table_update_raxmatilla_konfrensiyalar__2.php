<?php namespace Raxmatilla\Konfrensiyalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaKonfrensiyalar2 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_konfrensiyalar_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_konfrensiyalar_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
