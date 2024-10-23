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
        Schema::create('menu_models', function (Blueprint $table) {
            $table->id('item_id');  // Primary key with custom name 'item_id'
            $table->string('itemname');  // Name of the menu item
            $table->longText('detail')->nullable();  // Details about the menu item, nullable
            $table->decimal('price', 8, 2);  // Price of the item, with 8 digits in total and 2 decimal places
            $table->string('category_id');
            // $table->foreignId('category_id')->constrained('category_models','cat_id')->onDelete('cascade');  // Foreign key to the categories table
            $table->string('picture');  // Path to the item picture, nullable
            $table->timestamps();  // Created at and Updated at timestamps
        });

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_models');
    }
};
