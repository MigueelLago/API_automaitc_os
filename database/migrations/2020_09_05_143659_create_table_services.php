<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client_name');
            $table->char('cpf', 11)->nullable()->default(NULL);
            $table->char('cnpj', 14)->nullable()->default(NULL);
            $table->string('phone');
            $table->string('street');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->string('gender');
            $table->date('birth');
            $table->string('product');
            $table->string('ps')->nullable()->default(NULL);
            $table->longText('description');
            $table->timestamps(); //created_at && updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
