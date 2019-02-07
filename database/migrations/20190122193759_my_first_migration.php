<?php

use \Migrations\Migration;

class MyFirstMigration extends Migration
{
    public function up()
    {
        $this->schema->create('users', function (Illuminate\Database\Schema\Blueprint $table) {
            // Auto-increment id
            $table->increments('id');
            $table->string('name',50);
            $table->string('email',50)->unique();
            $table->string('password');
            // Required for Eloquent's created_at and updated_at columns
            $table->timestamps();
        });
    }
    public function down()
    {
        $this->schema->drop('users');
    }
}
