<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTables extends Migration
{
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('title', 250)->nullable();
            $table->string('subtitle', 250)->nullable();
            $table->string('owner', 200)->nullable();
            $table->string('status', 10)->default('1')->nullable()->comment('0=hide 1=show');
            $table->text('description')->nullable();
            $table->timestamp('publish_start_date')->nullable();
        });

        Schema::create('recipe_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'recipe');
        });

        
    }

    public function down()
    {
        
        Schema::dropIfExists('recipe_slugs');
        Schema::dropIfExists('recipes');
    }
}
