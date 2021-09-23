<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSharonitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sharonites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('empName');
            $table->string('designation');
            $table->date('dob');
            $table->string('anniversary')->nullable();
            $table->string('bloodGrooup');
            $table->string('officeNumber');
            $table->string('personalNumber');
            $table->string('officeEmail')->unique();
            $table->string('add1');
            $table->string('add2');
            $table->string('locality');
            $table->string('city');
            $table->string('pincode');
            $table->string('cp1');
            $table->string('relationship1');
            $table->string('cd1');
            $table->string('cp2');
            $table->string('relationship2');
            $table->string('cd2');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sharonites');
    }
}
