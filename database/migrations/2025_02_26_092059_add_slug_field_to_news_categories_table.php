<?php

use App\Models\NewsCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('news_categories', function (Blueprint $table) {
            $table->string('slug')->after('name')->nullable()->unique();
        });

        $list = NewsCategory::cursor();
        foreach ($list as $item) {
            $item->slug = Str::slug($item->name);
            $item->save();
        }

        Schema::table('news_categories', function (Blueprint $table) {
            $table->string('slug')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news_categories', function (Blueprint $table) {
            //
        });
    }
};
