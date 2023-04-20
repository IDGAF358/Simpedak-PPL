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
        Schema::create('serve_product_owners', function (Blueprint $table) {
            $table->id();
            $table->foreignId("client_id")->constrained();
            $table->foreignId("product_id")->constrained();
            $table->integer("quantity");
            $table->enum("unit", ["Pieces", "Packages", "Kilogram", "Liter", "Ton", "Buah"]);
            $table->bigInteger("price");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serve_product_owners');
    }
};
