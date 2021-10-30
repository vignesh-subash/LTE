<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prefix');
            $table->string('companyName');
            $table->string('salutation1')->nullable;
            $table->string('contactPerson1')->nullable;
            $table->string('designation1')->nullable;
            $table->string('salutation2')->nullable;
            $table->string('contactPerson2')->nullable;
            $table->string('designation2')->nullable;
            $table->string('add1');
            $table->string('add2')->nullable;
            $table->string('locality');
            $table->string('city');
            $table->char('pincode', 6);
            $table->string('state');
            $table->string('country');
            $table->string('phone1', 15)->nullable;
            $table->string('phone2', 15)->nullable;
            $table->string('phone3', 15)->nullable;
            $table->string('mobile1', 14)->nullable;
            $table->string('mobile2', 14)->nullable;
            $table->string('mobile3', 14)->nullable;
            $table->string('fax', 16)->nullable;
            $table->string('email1')->nullable;
            $table->string('email2')->nullable;
            $table->string('website1')->nullable;
            $table->string('website2')->nullable;
            $table->date('birthday')->nullable;
            $table->date('anniversary')->nullable;
            $table->boolean('refill')->default(false);
            $table->boolean('newyear')->default(false);
            $table->boolean('diwali')->default(false);
            $table->boolean('architectDay')->default(false);
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
        Schema::dropIfExists('demos');
    }
}
