<?php namespace Nexxa\Enhancedmedia\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEnhancedMediaTable extends Migration
{

    public function up()
    {
        Schema::create('nexxa_enhancedmedia_enhanced_media', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('label', 255);
            $table->string('title', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nexxa_enhancedmedia_enhanced_media');
    }
}
