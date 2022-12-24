<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('configrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ar_title')->nullable(); 
            $table->string('title')->nullable();
            $table->string('slide_description')->nullable();
            $table->string('ar_slide_description')->nullable();
            
            $table->text('description')->nullable();
            $table->text('en_description')->nullable();

            
            $table->text('head_meta')->nullable();
            $table->text('footer_meta')->nullable();

            $table->text('header_keywords')->nullable();
            $table->text('en_header_keywords')->nullable();

            $table->integer('training_fields_count')->nullable();
            $table->integer('training_course_count')->nullable();
            $table->integer('trainee_count')->nullable();

            $table->integer('projects_counter')->nullable();
            $table->integer('clients_counter')->nullable();
            $table->integer('experience_year_counter')->nullable();
            
            $table->string('video')->nullable();
            $table->string('video2')->nullable();

            $table->string('address')->nullable();
            $table->string('ar_address')->nullable();
            
            $table->string('job_form_link')->nullable();
            $table->string('internship_form_link')->nullable();

            $table->string('email')->nullable();
            # social media links
            $table->string('youtube')->nullable();
            $table->string('behance')->nullable();
            $table->string('company_profile')->nullable();
            $table->string('Visual_identity_samples')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('location')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone2')->nullable();
            $table->string('google_play_link')->nullable(); 


            
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
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
        Schema::dropIfExists('configrations');
    }
}
