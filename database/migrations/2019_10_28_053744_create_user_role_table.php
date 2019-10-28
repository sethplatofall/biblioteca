<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_role', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id', 'fk_user_role_to_role')->references('id')->on('role')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'fk_user_role_to_user')->references('id')->on('user')->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('state');
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
        Schema::dropIfExists('user_role');
    }
}
