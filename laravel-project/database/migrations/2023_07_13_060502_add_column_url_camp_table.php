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
            //URL列の追加
            //コメント列の後にURL列を追加
            //NULLを許容する
            //DB格納文字数1023文字まで
            $table->string("url",1023)->after("comment")->comment("url")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('camps', function (Blueprint $table) {
            //
            $table->dropColumn("url");
        });
    }
};
