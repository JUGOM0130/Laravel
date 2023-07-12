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
        Schema::create('camps', function (Blueprint $table) {
            $table->id();
            $table->date("season_start");
            $table->date("season_end");
            $table->string("address1")->comment("住所");
            $table->string("place_name")->comment("名称");
            $table->integer("season_A")->comment("top_season");
            $table->integer("season_B")->comment("high_season");
            $table->integer("season_C")->comment("regular_season");
            $table->integer("season_D")->comment("off_season");
            $table->boolean("is_entry_car")->comment("車の乗り入れ可否");
            $table->boolean("is_reserve")->comment("予約必須か");
            $table->string("comment")->comment("comment");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camps');
    }
};
