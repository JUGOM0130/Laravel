<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        if (Schema::hasColumn('todo_lists', 'name')) {
            return;
        }
        Schema::table('todo_lists', function (Blueprint $table) {
            $table->string('name'); //★追記
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('todo_lists', function (Blueprint $table) {
            //
        });
    }
};
