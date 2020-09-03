<?php namespace Raxmatilla\Konfrensiyalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaKonfrensiyalar extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_konfrensiyalar_', function($table)
        {
            $table->string('kun');
            $table->string('title');
            $table->string('image');
            $table->string('soat');
            $table->string('manzil');
            $table->text('content');
            $table->boolean('active')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_konfrensiyalar_', function($table)
        {
            $table->dropColumn('kun');
            $table->dropColumn('title');
            $table->dropColumn('image');
            $table->dropColumn('soat');
            $table->dropColumn('manzil');
            $table->dropColumn('content');
            $table->dropColumn('active');
        });
    }
}
