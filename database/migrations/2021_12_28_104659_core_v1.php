<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CoreV1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //clients
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unique_identifier')->unique();
            $table->string('secret');
            $table->timestamps();
        });

        //categories
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        //tags
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        //creators
        Schema::create('creators', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('contact');
            $table->string('email');
            $table->timestamps();
        });

        //sticker_packs
        Schema::create('sticker_packs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->boolean('trending');
            $table->boolean('published');
            $table->boolean('free');
            $table->float('price');
            $table->string('type'); //animated or still
            $table->foreignId('category_id');
            $table->foreignId('creator_id');
            $table->timestamps();
        });

        //stickers
        Schema::create('stickers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sticker_pack_id');
            $table->string('file_path');
            $table->string('emoji')->default('');
            $table->boolean('default')->default(false); //is the default sticker for the pack
            $table->boolean('usable')->default(true);
            $table->timestamps();
        });

        //taggables
        Schema::create('taggables', function (Blueprint $table) {
            $table->integer('tag_id');
            $table->integer('taggable_id');
            $table->string('taggable_type');
        });

        //downloads
        Schema::create('downloads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sticker_pack_id');
            $table->foreignId('client_id');
            $table->timestamps();
        });

        //client_sticker_pack
        Schema::create('client_sticker_pack', function (Blueprint $table) {
            $table->foreignId('client_id');
            $table->foreignId('sticker_pack_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('clients');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('creators');
        Schema::dropIfExists('sticker_packs');
        Schema::dropIfExists('stickers');
        Schema::dropIfExists('taggables');
        Schema::dropIfExists('downloads');
        Schema::dropIfExists('client_sticker_pack');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
