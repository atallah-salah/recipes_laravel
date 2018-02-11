<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MakeTables extends Seeder
{
//    create tables: users,food_recipes,comments
    public function run()
    {
        Schema::create('users', function ($table) {
            $table->increments('id')->autoIncrement()->unsigned();
            $table->string('name',191)->collation('utf8mb4_unicode_ci');
            $table->string('email',191)->collation('utf8mb4_unicode_ci')->unique();
            $table->string('password',191)->collation('utf8mb4_unicode_ci');
            $table->string('remember_token',100)->collation('utf8mb4_unicode_ci')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });

        Schema::create('food_recipes', function ($table) {
            $table->increments('id')->autoIncrement();
            $table->char('name',191);
            $table->longText('disc');
            $table->char('image')->default('images/default.jpg');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('author');
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });

        Schema::create('comments', function ($table) {
            $table->increments('id')->autoIncrement();
            $table->char('user_name');
            $table->string('comment');
            $table->integer('recipe_id')->unsigned();
            $table->foreign('recipe_id')->references('id')->on('food_recipes');
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
        });
    }
}
