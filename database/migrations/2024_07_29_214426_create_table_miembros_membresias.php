<?php

use App\Models\Membresia;
use App\Models\Socio;
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
        Schema::create('table_miembros_membresias', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Socio::class);
            $table->foreignIdFor(Membresia::class);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
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
        Schema::dropIfExists('table_miembros_membresias');
    }
};
