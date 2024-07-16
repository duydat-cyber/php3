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
        Schema::create('khach_hangs', function (Blueprint $table) {
            // $table->id();
            $table->increments('id'); 
            $table->string('ma_khach_hang', 10)->unique();
            $table->string('ten_khach_hang', 50);
            $table->string('so_dien_thoai', 10);
            $table->string('dia_chi', 50);
            $table->string('email', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khach_hangs');
    }
};
