<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHabitatToAnimal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->unsignedBigInteger('habitat')->index()->after('quantity')->nullable();
            $table->foreign('habitat')->references('id')->on('habitats')->onDelete('cascade');
            $table->unsignedBigInteger('caretaker')->index()->after('quantity')->nullable();
            $table->foreign('caretaker')->references('id')->on('users')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->dropColumn("habitat");
            $table->dropColumn("caretaker");
        });
    }
}
