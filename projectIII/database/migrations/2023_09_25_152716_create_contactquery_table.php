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
        Schema::create('contactquery', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->double('contact');
            $table->string('address');
            $table->mediumText('message');
            //$table->foreignId("user_id")->constrained();
            // $table->unsignedBigInteger('admin_id');
            // $table->foreign('admin_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactquery');
    }
};
