<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->string('tg_link');
            $table->string('ts_link');
            $table->string('web_link');
            $table->boolean('ios_review');
            $table->boolean('tv_review');
            $table->boolean('public');
            $table->timestamps();
        });



        // Insert some stuff
        DB::table('contacts')->insert(
            array(
                'id' =>0,
                'message' => 'Message',
                'tg_link' => 'Telegram Group',
                'ts_link' => 'Telegram Support Link',
                'web_link' => 'Website Link',
                'ios_review' => true,
                'tv_review' => true,
                'public' => true,
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
