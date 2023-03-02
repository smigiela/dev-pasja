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
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')
                ->references('id')
                ->on('blog_categories')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
        });


        $categories = [
            ['id' => 1, 'name' => 'Programowanie'],
            ['id' => 2, 'name' => 'Systemy Operacyjne'],
            ['id' => 3, 'name' => 'Windows'],
            ['id' => 4, 'name' => 'Linux'],
            ['id' => 5, 'name' => 'Porady'],
            ['id' => 6, 'name' => 'Szkolenia'],
            ['id' => 7, 'name' => 'Tutoriale'],
            ['id' => 8, 'name' => 'Materiały wideo']
        ];

        \App\Models\Admin\Blog\Category::insert($categories);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
