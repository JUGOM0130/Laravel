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
        Schema::table('camps', function (Blueprint $table) {
            //
            $table->date("season_start")->nullable(true)->change();
            $table->date("season_end")->nullable(true)->change();
            $table->string("address1")->comment("住所")->nullable(true)->change();
            $table->string("place_name")->comment("名称")->nullable(true)->change();
            $table->integer("season_A")->comment("top_season")->nullable(true)->change();
            $table->integer("season_B")->comment("high_season")->nullable(true)->change();
            $table->integer("season_C")->comment("regular_season")->nullable(true)->change();
            $table->integer("season_D")->comment("off_season")->nullable(true)->change();
            $table->boolean("is_entry_car")->comment("車の乗り入れ可否")->nullable(true)->change();
            $table->boolean("is_reserve")->comment("予約必須か")->nullable(true)->change();
            $table->string("comment")->comment("comment")->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('camps', function (Blueprint $table) {
            //
            $table->date("season_start")->nullable(false)->change();
            $table->date("season_end")->nullable(false)->change();
            $table->string("address1")->comment("住所")->nullable(false)->change();
            $table->string("place_name")->comment("名称")->nullable(false)->change();
            $table->integer("season_A")->comment("top_season")->nullable(false)->change();
            $table->integer("season_B")->comment("high_season")->nullable(false)->change();
            $table->integer("season_C")->comment("regular_season")->nullable(false)->change();
            $table->integer("season_D")->comment("off_season")->nullable(false)->change();
            $table->boolean("is_entry_car")->comment("車の乗り入れ可否")->nullable(false)->change();
            $table->boolean("is_reserve")->comment("予約必須か")->nullable(false)->change();
            $table->string("comment")->comment("comment")->nullable(false)->change();
        });
    }
};
