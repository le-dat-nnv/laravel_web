<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {

        Schema::create('module_config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_module');
            $table->string('name_short');
            $table->string('summary');
            $table->text('des');
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        //
    }
};
