<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->enum('month', [1, 2, 3,4,5,6,7,8,9,10,11,12]);
            $table->unsignedInteger('day');
            $table->string('title')->default('день рождения')->change();
            $table->text('description')->default('день рождения')->change();
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
        Schema::table('events', function (Blueprint $table) {
            $table->dropSoftDeletes();
            $table->dropColumn('month');
            $table->dropColumn('day');
        });
    }
}
