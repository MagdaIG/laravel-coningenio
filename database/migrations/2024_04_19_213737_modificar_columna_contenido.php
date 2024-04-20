<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // https://laracoding.com/how-to-change-a-table-column-type-using-laravel-migrations/
    public function up(): void
    {
        Schema::table('servicios',function (Blueprint $table){
            $table->text("contenido")->change();
        });
        Schema::table('nosotros',function (Blueprint $table){
            $table->text("contenido")->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('servicios',function (Blueprint $table){
            $table->char("contenido")->change();
        });
        Schema::table('nosotros',function (Blueprint $table){
            $table->char("contenido")->change();
        });
    }
};
