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
        Schema::create('san_phams', function (Blueprint $table) {
            // $table->id();
            $table->increments('id'); // primary, tu dong tang
            $table->string('ma_san_pham', 10)->unique(); // unique du lieu khong duoc trung nhau
            $table->string('ten_san_pham', 100);
            $table->double('gia', 8, 2);
            $table->integer('so_luong');
            $table->date('ngay_nhap');
            $table->text('mo_ta')->nullable(); // cho phep gia tri la null
            $table->boolean('trang_thai')->default(0);
            // default set gia tri mac dinh
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
