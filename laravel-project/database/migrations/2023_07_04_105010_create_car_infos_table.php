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
        Schema::create('car_infos', function (Blueprint $table) {
            $table->id();
            $table->string('car_name')->comment("車名");
            $table->double('mode_urban',4,2)->comment("市街地");#zzzz.zz
            $table->double('mode_suburbs',4,2)->comment("郊外");
            $table->double('mode_highway',4,2)->comment("高速道路");
            $table->double('mode_wltc',4,2)->comment("#WLTCモード");
            $table->integer('price')->comment("価格");
            $table->integer('model_year')->comment("年式");
            $table->integer('mileage')->comment("走行距離");
            $table->text('comment')->comment("コメント");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_infos');
    }
};
