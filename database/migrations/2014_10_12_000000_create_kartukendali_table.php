<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
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
            $table->string('pert_1')->nullable();
            $table->string('pert_2')->nullable();
            $table->string('pert_3')->nullable();
            $table->string('pert_4')->nullable();
            $table->string('pert_5')->nullable();
            $table->string('pert_6')->nullable();
            $table->string('pert_7')->nullable();
            $table->string('pert_8')->nullable();
            $table->string('pert_9')->nullable();
            $table->string('pert_10')->nullable();
            $table->string('pert_11')->nullable();
            $table->string('pert_12')->nullable();
            $table->string('pert_13')->nullable();
            $table->string('pert_14')->nullable();
            $table->string('pert_15')->nullable();
            $table->string('pert_16')->nullable();
            $table->string('pert_17')->nullable();
            $table->string('pert_18')->nullable();
            $table->string('pert_19')->nullable();
            $table->string('pert_20')->nullable();
            $table->string('pert_21')->nullable();
            $table->string('pert_22')->nullable();
            $table->string('pert_23')->nullable();
            $table->string('pert_24')->nullable();
            $table->string('pert_25')->nullable();
            $table->string('pert_26')->nullable();
            $table->string('pert_27')->nullable();
            $table->string('pert_28')->nullable();
            $table->string('pert_29')->nullable();
            $table->string('pert_30')->nullable();
            $table->string('pert_31')->nullable();
            $table->string('pert_32')->nullable();
            $table->string('pencapaian')->nullable();
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
