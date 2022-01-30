<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMotdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motd_type', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->boolean('active');
            $table->string('motd_class')->nullable()->default(null);
        });
        Schema::create('motd', function (Blueprint $table) {
            $table->id();
            $table->string('motd_text');
            $table->unsignedBigInteger('type_id');
            $table->string('created_by' );
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
        Schema::drop('motd_type');
        Schema::drop('motd');
    }
}
