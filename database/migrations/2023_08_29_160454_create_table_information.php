<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('tel');
            $table->string('address');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('information');
    }
}
;