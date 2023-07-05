<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToBalanceSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('balance_sheets', function (Blueprint $table) {
            $table->integer('expenses');
            $table->integer('income');
            $table->dropColumn('tax');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('balance_sheets', function (Blueprint $table) {
            $table->integer('tax');
            $table->dropColumn('income');
            $table->dropColumn('expenses');
        });
    }
}
