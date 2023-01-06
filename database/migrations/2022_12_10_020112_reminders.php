<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('reminders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->time('start_hour');
            $table->date('initial_date');
            $table->date('final_date');
            $table->unsignedBigInteger('user_id')->nullable()->comment('created by: ');
            $table->unsignedBigInteger('medicine_id')->nullable()->comment('created by: ');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('medicine_id')->references('id')->on('medicines')->onDelete('set null');

            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('reminders');
    }
};
