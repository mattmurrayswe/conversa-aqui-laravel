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
        Schema::create('users_rel_amizade', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cellphone');
            $table->date('data_nascimento');
            $table->enum('you_are_gender', ['Homem', 'Mulher', 'Outros']);
            $table->enum('you_look_for_gender', ['Homem', 'Mulher', 'Outros']);
            $table->enum('you_look_for_gender_friend', ['Homem', 'Mulher', 'Outros']);
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_rel_amizade');
    }
};