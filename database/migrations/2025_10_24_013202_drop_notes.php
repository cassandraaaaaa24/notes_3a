<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
        {
        Schema::dropIfExists('notes'); // Replace 'table_name' with your table's name
        }

    public function down(): void
        {

        }
};
