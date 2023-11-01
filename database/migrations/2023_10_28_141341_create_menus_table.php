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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->integer('order');
            $table->foreignId('menus_id')->nullable();
            $table->boolean('status')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('menus_id')
                ->references('id')
                ->on('menus');
        });

        // ID - 1
        DB::table('menus')->insert([
            'name' => 'Início',
            'url' => '/',
            'order' => 1,
            'status' => 1
        ]);
        // ID - 2
        DB::table('menus')->insert([
            'name' => 'Postagens',
            'url' => '/postagens',
            'order' => 2,
            'status' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
