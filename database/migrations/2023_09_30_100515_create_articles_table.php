<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('description',90)->nullable();
            $table->string('batch');
            $table->string('type')->nullable();         
            $table->string('brand')->nullable();   
            $table->string('unit')->nullable();         
            $table->string('min_stock');         
            $table->string('max_stock');         
            $table->date('due_date');            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
