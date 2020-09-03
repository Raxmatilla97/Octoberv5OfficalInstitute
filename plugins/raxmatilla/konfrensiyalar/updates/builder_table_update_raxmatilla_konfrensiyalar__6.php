<?php namespace Raxmatilla\Konfrensiyalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaKonfrensiyalar6 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_konfrensiyalar_', function($table)
        {
            $table->dropColumn('kun_soat');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_konfrensiyalar_', function($table)
        {
            $table->text('kun_soat');
        });
    }
}
