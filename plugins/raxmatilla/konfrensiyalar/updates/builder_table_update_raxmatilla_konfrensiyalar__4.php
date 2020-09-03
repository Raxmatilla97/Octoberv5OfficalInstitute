<?php namespace Raxmatilla\Konfrensiyalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaKonfrensiyalar4 extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_konfrensiyalar_', function($table)
        {
            $table->string('kun_soat', 191);
            $table->dropColumn('kun');
            $table->dropColumn('soat');
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_konfrensiyalar_', function($table)
        {
            $table->dropColumn('kun_soat');
            $table->string('kun', 191);
            $table->string('soat', 191);
        });
    }
}
