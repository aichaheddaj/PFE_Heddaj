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
        Schema::create('pies', function (Blueprint $table) {
            $table->id();
            $table->string('d1');
            $table->float('pour1');
            $table->string('d2');
            $table->float('pour2');
            $table->string('d3');
            $table->float('pour3');
            $table->string('d4');
            $table->float('pour4');
            $table->string('d5');
            $table->float('pour5');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pies');
    }
};
