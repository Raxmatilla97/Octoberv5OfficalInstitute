<?php namespace Raxmatilla\Konfrensiyalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaKonfrensiyalar extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_konfrensiyalar_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_konfrensiyalar_');
    }
}
