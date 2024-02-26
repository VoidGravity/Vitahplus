<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'mongodb';

    public function up()
    {
        Schema::connection($this->connection)->create('doctors', function (Blueprint $collection) {
            $collection->index('user_id');
            $collection->string('specialization');
            $collection->string('license_number')->unique();
            $collection->string('education');
            $collection->timestamps();
        });
    }

    public function down()
    {
        Schema::connection($this->connection)->dropIfExists('doctors');
    }
}
