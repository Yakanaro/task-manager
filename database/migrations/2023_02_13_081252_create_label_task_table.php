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
        Schema::create(
            'label_task', function (Blueprint $table) {
                $table->id();
                $table->smallInteger('label_id');
                $table->foreign('label_id')->references('id')->on('labels')->onDelete('cascade');
                $table->smallInteger('task_id');
                $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('label_task');
    }
};
