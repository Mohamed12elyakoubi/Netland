<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("rating");
            $table->integer("length_in_minutes");
            $table->date("released_at");
            $table->string("country_of_origin");
            $table->string("youtube_trailer_id");
            $table->text("summary");
            $table->string("spoken_in_language");
            $table->enum("media_type", ["movie", "series"]);
            $table->date("updated_at");
            $table->date("created_at");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
