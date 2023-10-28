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
            $table->boolean('status');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('menus_id')
                ->references('id')
                ->on('menus');
        });

        DB::table('menus')->insert([
            'name' => 'Início',
            'url' => '/',
            'order' => 1,
            'status' => 1
        ]);

        DB::table('menus')->insert([
            'name' => 'Palestras',
            'url' => '/palestras',
            'order' => 2,
            'status' => 1
        ]);

        DB::table('menus')->insert([
            'name' => 'Links úteis',
            'url' => '#',
            'order' => 3,
            'status' => 1
        ]);

        DB::table('menus')->insert([
            'name' => 'Link 1',
            'url' => '#',
            'order' => 4,
            'menus_id' => 3,
            'status' => 1
        ]);

        DB::table('menus')->insert([
            'name' => 'Link 2',
            'url' => '#',
            'order' => 5,
            'menus_id' => 3,
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
