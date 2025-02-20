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
        Schema::create('package_routes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('route_id');
            $table->timestamps();

            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_routes');
    }
};
