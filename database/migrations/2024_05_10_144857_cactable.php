<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
        Schema::create('nha_sx', function (Blueprint $table) {
            $table->id();
            $table->string('ten',50);
            $table->boolean('thu_tu')->default(0);
            $table->boolean('an_hien')->default(1);
            $table->timestamps();
        });
        Schema::create('tinh_chat', function (Blueprint $table) {
            $table->id();
            $table->string('ten',50);
            $table->timestamps();
        });
        Schema::create('san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('ten',255);
            $table->integer('id_nhasx');
            $table->integer('gia')->default(0);
            $table->integer('gia_km')->default(0);
            $table->string('hinh',255)->nullable();
            $table->date('ngay',255)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('xem')->default(0);
            $table->boolean('hot')->default(0);
            $table->boolean('an_hien')->default(1);
            $table->boolean('tinh_chat')->default(0);
            $table->string('mau_sac',50)->nullable();
            $table->string('can_nang',50)->nullable();
            $table->string('soluong',200)->nullable();
            $table->timestamps();
        });
        Schema::create('binh_luan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_sp')->comment('Mã sản phẩm');
            $table->integer('id_user')->comment('Người bình luận');
            $table->text('noi_dung')->comment('Nội dung bình luận');
            $table->datetime('thoi_diem')->comment('Thời điểm bình luận');
            $table->boolean('an_hien')->default(0)->comment('0 là ẩn 1 là hiện');             
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nha_sx');
        Schema::dropIfExists('tinh_chat');
        Schema::dropIfExists('san_pham');
        Schema::dropIfExists('binh_luan');
    }
};
