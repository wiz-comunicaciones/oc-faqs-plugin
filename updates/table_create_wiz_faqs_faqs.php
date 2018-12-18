<?php namespace Wiz\Faqs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class TableCreateWizFaqsFaqs extends Migration
{
    public function up()
    {
        Schema::create('wiz_faqs_faqs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->text('question')->nullable();
            $table->text('answer')->nullable();
            $table->boolean('is_published')->nullable()->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wiz_faqs_faqs');
    }
}
