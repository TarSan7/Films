<?php
/*
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            //$table->string('user_name');
            $table->foreignId('user_name')->constrained('users');
            $table->date('date');
            $table->text('comment');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
*/