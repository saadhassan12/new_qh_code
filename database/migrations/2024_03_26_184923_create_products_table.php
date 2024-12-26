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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_type_id');
            $table->string('product_model')->nullable();
        //     $table->string('shape')->nullable();
        //    $table->integer('wattage')->nullable();
        //    $table->integer('initial_lumen')->nullable();
        //     $table->integer('stable_lumen')->nullable();
        //   $table->integer('ra')->nullable();
        //    $table->integer('beam_angle')->nullable();
        //   $table->integer('guarantee')->nullable();
        //    $table->integer('lamp_size_h1')->nullable();
        //     $table->integer('lamp_size_h2')->nullable();
        //    $table->integer('lamp_size_d')->nullable();
        //     $table->float('inches')->nullable();
        //     $table->integer('d_round')->nullable();
        //     $table->integer('d_square')->nullable();
        //     $table->integer('cut_square')->nullable();
        //     $table->integer('cut_round')->nullable();
        //     $table->integer('h')->nullable();
        //     $table->string('cut_round')->nullable()->change();
        //     $table->string('cut_square')->nullable()->change();
        //     $table->string('d_square')->nullable()->change();

        //     // Adding new string columns
        //     $table->string('lamp_size_w')->nullable();
        //     $table->string('lamp_size_l')->nullable();
        //     $table->string('lamp_size_i')->nullable();
        //     $table->string('lamp_size_t')->nullable();
        //     $table->string('ip_class')->nullable();
        //     $table->foreign('product_type_id')->references('id')->on('product_types')->onDelete('cascade')->onUpdate('cascade');
          
            $table->string('image_url')->nullable();
          
            $table->softDeletes();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
