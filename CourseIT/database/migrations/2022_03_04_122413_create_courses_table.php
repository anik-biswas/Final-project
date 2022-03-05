<?php

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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table-> string('name');
            $table-> integer('course_type_id');
            $table-> integer('Course_length');
            $table-> double('price');
            $table-> double('discount_price')->default(0);
            $table-> text("description");
            $table-> string("course_image")->nullable();
            $table->foreignId("category_id")->constrained('categories');
            $table->foreignId("instructor_id")->constrained('instructors');
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
        Schema::dropIfExists('courses');
    }
};
