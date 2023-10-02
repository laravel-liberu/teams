<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('team_user', function (Blueprint $table) {
            $table->foreignId('team_id')->constrained()->index()->onUpdate('cascade')->onDelete('cascade');

            $table->foreignId('user_id')->constrained()->index()->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'team_id']);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('team_user');
    }
}
