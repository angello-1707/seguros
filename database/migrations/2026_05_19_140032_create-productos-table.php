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
        //
        Schema::create('productos', function (Blueprint $table) {
         $table->id();
         $table->string('nom_prod',30);
         $table->string('col_prod',20);
         $table->string('obs_prod',20)->nullable();
         $table->integer('exist_prod');
         $table->decimal('pre_comp_prod',10,2);
         $table->decimal('pre_vta_pod',10,2);
         $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
