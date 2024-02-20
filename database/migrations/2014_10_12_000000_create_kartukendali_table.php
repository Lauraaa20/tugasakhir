<?php

use App\Models\User;
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
        Schema::create('kartukendali', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pert_1');
            $table->string('pert_2');
            $table->string('pert_3');
            $table->string('pert_4');
            $table->string('pert_5');
            $table->string('pert_6');
            $table->string('pert_7');
            $table->string('pencapian');
            $table->timestamp('updated_at')->nullable();
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
        Schema::dropIfExists('kartukendali');
    }
};
