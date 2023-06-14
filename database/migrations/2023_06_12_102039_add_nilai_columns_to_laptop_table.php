<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNilaiColumnsToLaptopTable extends Migration
{
    public function up()
    {
        Schema::table('laptop', function (Blueprint $table) {
            $table->decimal('nilai_cpu', 8, 2)->nullable();
            $table->decimal('nilai_ram', 8, 2)->nullable();
            $table->decimal('nilai_storage', 8, 2)->nullable();
            $table->decimal('nilai_resolusi_layar', 8, 2)->nullable();
            $table->decimal('nilai_vga', 8, 2)->nullable();
        });
    }

    public function down()
    {
        Schema::table('laptop', function (Blueprint $table) {
            $table->dropColumn(['nilai_cpu', 'nilai_ram', 'nilai_storage', 'nilai_resolusi_layar', 'nilai_vga']);
        });
    }
}
