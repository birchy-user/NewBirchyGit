<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileDescsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_descs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('users_id'); // reference to the ID of the user
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->index('users_id'); /// for foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_descs');
    }
}
