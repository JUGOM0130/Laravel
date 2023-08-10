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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->string("company_cd")->comment("会社コード");
            $table->string("category")->comment("カテゴリ\nバグ、要望、機能追加、質問");
            $table->string("title")->comment("タイトル");
            $table->string("detail")->comment("詳細");
            $table->integer("priority")->comment("優先順位");
            $table->string("task_flag")->comment("タスクフラグ\n対応完了、対応中、未着手、中断");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
