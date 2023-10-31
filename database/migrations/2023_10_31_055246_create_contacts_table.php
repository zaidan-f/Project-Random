<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Name of the contact
            $table->string('email'); // Email of the contact
            $table->text('message'); // Message from the contact
            $table->timestamps(); // Created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}

