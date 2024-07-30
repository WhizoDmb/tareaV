<?php

use App\Models\Modalidad;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_membresias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('plazo');
            $table->decimal('costo', $precision = 6, $scale = 4);
            $table->foreignIdFor(Modalidad::class);
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
        Schema::dropIfExists('table_membresias');
    }
};
