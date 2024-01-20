<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sensor_data', function (Blueprint $table) {
            $table->id();
            $table->timestamp('timestamp');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->string('license_plate');
            $table->string('model');
            $table->string('impact_severity');
            $table->string('sensor_id');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('sensor_data');
    }
};
