<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGalleryAndThumbnailForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('projects', function (Blueprint $table) {
			$table->foreign('thumbnail_image_id')->references('id')->on('thumbnail_images');
		});

		Schema::table('gallery_images', function (Blueprint $table) {
			$table->foreign('project_id')->references('id')->on('projects');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
