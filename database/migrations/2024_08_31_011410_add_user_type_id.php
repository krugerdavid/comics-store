<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('user_type_id');
            $table->boolean('active')->default(true);
            $table->foreign('user_type_id')->references('id')->on('user_types');
        });
    }
};
