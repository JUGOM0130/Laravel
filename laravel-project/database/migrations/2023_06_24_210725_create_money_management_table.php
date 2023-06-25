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
        Schema::create('money_management', function (Blueprint $tbl) {
            $tbl->id();
            $tbl->integer("month");
            $tbl->integer("category");
            $tbl->integer("kingaku");
            $tbl->string("comment");
            $tbl->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('money_management');
    }
};
