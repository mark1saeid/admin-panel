<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('link');
            $table->timestamps();
        });



        // Insert some stuff
        DB::table('hosts')->insert(
            array(
                'id' =>0,
                'title' => 'Oppaa',
                'link' => 'oppaa.live:80',
            ));
        DB::table('hosts')->insert(
            array(
            'id' =>2,
            'title' => '1987',
            'link' => '1987.ws:80',
        )
        );
        DB::table('hosts')->insert(
           array(
                'id' =>3,
                'title' => '723',
                'link' => '723.info:80',
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
        Schema::dropIfExists('hosts');
    }
}
