<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalancheSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balanche_sheets', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->nullable()->index();
            $table->integer('year_id')->nullable()->index();
            $table->integer('month_id')->nullable()->index();
            $table->integer('profit')->nullable()->index();
            $table->integer('tax')->nullable()->index();
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
        Schema::dropIfExists('balanche_sheets');
    }
}
