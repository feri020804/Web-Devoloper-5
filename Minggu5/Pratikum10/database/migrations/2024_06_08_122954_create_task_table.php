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
        Schema::create('tasks', function (Blueprint $table) { // Perbaiki nama tabel menjadi bentuk jamak
            $table->id();
            $table->string('name');
            $table->date('deadline');
            $table->text('deskripsi');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};


// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('task', function (Blueprint $table) {
//             $table->id();
//             $table->string('name');
//             $table->date('deadline');
//             $table->text('deskripsi');
//             // $table->string('status');
//             // $table->foreignId('status_id');
//             $table->unsignedBigInteger('status_id');
//             $table->foreign('status_id')->references('id')->on('statuses');
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('task');
//     }
// };
