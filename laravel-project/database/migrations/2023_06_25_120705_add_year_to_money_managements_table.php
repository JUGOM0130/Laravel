<?php

use App\Models\MoneyManagements;
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
        if(Schema::hasColumn('money_managements','year')){
            //money_managementsテーブルにyearカラムがあればreturn以降の処理実行しない
            return;
        }
        Schema::table('money_managements', function (Blueprint $table) {
            $table->integer('year')->after("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('money_managements', function (Blueprint $table) {
            //
        });
    }
};
