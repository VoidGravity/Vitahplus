<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::connection('mongodb')->create('prompts', function (Blueprint $table) {
            $table->id();
            $table->string('user_id'); // Store user's ID as a string
            $table->text('prompt'); 
            $table->timestamps();

            $table->index('user_id');
        });
    }

    public function down()
    {
        Schema::connection('mongodb')->dropIfExists('prompts');
    }
};
