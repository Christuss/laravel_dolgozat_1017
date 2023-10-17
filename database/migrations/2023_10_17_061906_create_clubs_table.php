<?php

use App\Models\Club;
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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id('club_id');
            $table->date('establishment');
            $table->string('location');
            $table->integer('max_number');
            $table->timestamps();
        });
        Club::create(['establishment' => '2000-01-15', 'location' => 'József körút 123.', 'max_number' => 50000]);
        Club::create(['establishment' => '2002-03-15', 'location' => 'Krisztina körút 222.', 'max_number' => 30000]);
        Club::create(['establishment' => '1967-05-11', 'location' => 'Oktogon', 'max_number' => 20000]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
