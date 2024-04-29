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
        Schema::create('types', function (Blueprint $table) {
            $table->id('type_id');
            $table->string('name', 255);
            $table->timestamps();
        });

        Schema::create('reports', function (Blueprint $table) {
            $table->id('report_id');
            $table->foreignId('user_id')->constrained('users', 'user_id')->onDelete('cascade');
            $table->foreignId('type_id')->constrained('types', 'type_id')->onDelete('cascade');
            $table->text('description');
            $table->text('address');
            $table->decimal('longitude', 15, 8);
            $table->decimal('latitude', 15, 8);
            $table->string('status', 50);
            $table->timestamps();
        });

        Schema::create('report_files', function (Blueprint $table) {
            $table->id('file_id');
            $table->foreignId('report_id')->constrained('reports', 'report_id')->onDelete('cascade');
            $table->string('img_path', 255);
            $table->timestamps();
        });

        Schema::create('responses', function (Blueprint $table) {
            $table->id('response_id');
            $table->foreignId('report_id')->constrained('reports', 'report_id')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users', 'user_id')->onDelete('cascade');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
        Schema::dropIfExists('responses');
        Schema::dropIfExists('report_files');
        Schema::dropIfExists('reports');
    }
};
