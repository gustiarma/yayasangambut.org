<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteOptionsControllersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_options', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('type')->nullable()->default('text');
            $table->string('value')->nullable();
            $table->string('title')->nullable();
            $table->string('location')->nullable();
            $table->string('default')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_options');
    }
}
