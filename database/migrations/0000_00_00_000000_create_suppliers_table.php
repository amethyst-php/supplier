<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('ore.supplier.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->text('notes')->nullable();
            // $table->integer('taxonomy_id')->unsigned()->nullable();
            // $table->foreign('taxonomy_id')->references('id')->on(Config::get('ore.taxonomy.table'));
            $table->boolean('enabled')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('ore.supplier.table'));
    }
}
