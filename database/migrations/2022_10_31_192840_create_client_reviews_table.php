<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('item_order')->unsigned()->nullable();
            $table->string("name")->nullable();
            $table->string("ar_name");
            $table->text("description")->nullable();
            $table->text("ar_description");
            $table->string('image')->nullable()->default('uploads\clientreviews\review.png');

            $table->bigInteger('field_id')->unsigned()->nullable();
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('client_reviews');
    }
}
