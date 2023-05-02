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
        Schema::create('formals', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('name');
            $table->string('date_from');
            $table->string('date_to');
            $table->integer('days');
            $table->enum('status',['مفعل','متوقف']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formals');
    }
};
