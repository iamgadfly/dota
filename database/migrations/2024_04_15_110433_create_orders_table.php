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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->enum('status', [\App\Enums\OrderEnum::CREATED, \App\Enums\OrderEnum::WAIT, \App\Enums\OrderEnum::CANCEL, \App\Enums\OrderEnum::SUCCESS, \App\Enums\OrderEnum::ERROR, \App\Enums\OrderEnum::TIMEOUT, \App\Enums\OrderEnum::ACCEPTED, \App\Enums\OrderEnum::PROCESSING]);
            $table->integer('usd_amount');
            $table->integer('rub_amount')->nullable();
            $table->json('items'); // classIds
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
